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
        // Step 1: Add project_id column without constraints first
        Schema::table('mentors', function (Blueprint $table) {
            if (!Schema::hasColumn('mentors', 'project_id')) {
                $table->unsignedBigInteger('project_id')->nullable()->after('resume_link');
            }
        });

        // Step 2: Update data with a more careful conversion
        if (Schema::hasColumn('mentors', 'project_choice')) {
            DB::statement("
                UPDATE mentors
                SET project_id = NULLIF(
                    CASE
                        WHEN project_choice REGEXP '^[0-9]+$'
                        THEN project_choice
                        ELSE NULL
                    END,
                    ''
                )
            ");

            // Step 3: Add foreign key constraint
            Schema::table('mentors', function (Blueprint $table) {
                $table->foreign('project_id')
                    ->references('id')
                    ->on('projects')
                    ->nullOnDelete();
            });

            // Step 4: Remove old column
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
                $table->string('project_choice')->nullable()->after('resume_link');
            }

            // Convert data back safely
            DB::statement("
                UPDATE mentors
                SET project_choice = COALESCE(CAST(project_id AS CHAR), '')
                WHERE project_id IS NOT NULL
            ");

            if (Schema::hasColumn('mentors', 'project_id')) {
                $table->dropForeign(['project_id']);
                $table->dropColumn('project_id');
            }
        });
    }
};
