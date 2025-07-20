<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('mentor_mentees', function (Blueprint $table) {
            $table->boolean('team_lead')->default(false)->nullable()->after('mentee_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mentor_mentees', function (Blueprint $table) {
            $table->dropColumn('team_lead');
        });
    }
};
