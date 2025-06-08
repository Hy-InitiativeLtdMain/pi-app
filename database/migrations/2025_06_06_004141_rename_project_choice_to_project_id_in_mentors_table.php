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
        Schema::table('mentors', function (Blueprint $table) {
            if (!Schema::hasColumn('mentors', 'project_id')) {
                $table->unsignedBigInteger('project_id')->after('resume_link')->nullable();
                $table->foreign('project_id')->references('id')->on('projects');
            }
        });

        // Manual update for existing data if project_choice exists
        if (Schema::hasColumn('mentors', 'project_choice')) {
            // Convert project_choice values to project_id, handling nulls
            DB::statement('UPDATE mentors SET project_id = NULLIF(project_choice, "")');

            Schema::table('mentors', function (Blueprint $table) {
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
            if (!Schema::hasColumn('mentors', 'project_choice')) {
                $table->string('project_choice')->after('resume_link')->nullable();
            }

            // Manual rollback for existing data, handling nulls
            DB::statement('UPDATE mentors SET project_choice = COALESCE(project_id, "")');

            if (Schema::hasColumn('mentors', 'project_id')) {
                $table->dropForeign(['project_id']);
                $table->dropColumn('project_id');
            }
        });
    }
};
