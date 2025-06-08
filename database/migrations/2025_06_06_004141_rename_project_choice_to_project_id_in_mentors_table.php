<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // First, add project_id column
        Schema::table('mentors', function (Blueprint $table) {
            if (!Schema::hasColumn('mentors', 'project_id')) {
                $table->unsignedBigInteger('project_id')->nullable()->after('resume_link');
            }
        });

        // Then, if project_choice exists, migrate the data
        if (Schema::hasColumn('mentors', 'project_choice')) {
            // Convert non-empty project_choice values to project_id
            DB::statement('UPDATE mentors SET project_id = CASE 
                WHEN project_choice IS NOT NULL AND project_choice != "" 
                THEN CAST(project_choice AS UNSIGNED) 
                ELSE NULL END'
            );

            // Add foreign key constraint after data migration
            Schema::table('mentors', function (Blueprint $table) {
                $table->foreign('project_id')->references('id')->on('projects');
                $table->dropColumn('project_choice');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mentors', function (Blueprint $table) {
            // Add project_choice column first
            if (!Schema::hasColumn('mentors', 'project_choice')) {
                $table->string('project_choice')->nullable()->after('resume_link');
            }

            // Convert data back
            DB::statement('UPDATE mentors SET project_choice = CAST(project_id AS CHAR)');

            // Drop project_id column and its foreign key
            if (Schema::hasColumn('mentors', 'project_id')) {
                $table->dropForeign(['project_id']);
                $table->dropColumn('project_id');
            }
        });
    }
};
