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
            // Add new column with a different name first
            $table->unsignedBigInteger('project_reference_id')->nullable()->after('resume_link');
            $table->foreign('project_reference_id')
                ->references('id')
                ->on('projects')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->dropForeign(['project_reference_id']);
            $table->dropColumn('project_reference_id');
        });
    }
};
