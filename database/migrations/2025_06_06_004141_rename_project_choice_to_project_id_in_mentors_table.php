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
                $table->unsignedBigInteger('project_id')->after('resume_link');
                $table->foreign('project_id')->references('id')->on('projects');
            });

            // Manual update for existing data
            DB::statement('UPDATE mentors SET project_id = project_choice');

            Schema::table('mentors', function (Blueprint $table) {
                $table->dropColumn('project_choice');
            });
        }

    /**
     * Reverse the migrations.
     */
        public function down(): void
        {
            Schema::table('mentors', function (Blueprint $table) {
                $table->string('project_choice')->after('resume_link');
            });

            // Manual rollback for existing data
            DB::statement('UPDATE mentors SET project_choice = project_id');

            Schema::table('mentors', function (Blueprint $table) {
                $table->dropForeign(['project_id']);
                $table->dropColumn('project_id');
            });
        }
};
