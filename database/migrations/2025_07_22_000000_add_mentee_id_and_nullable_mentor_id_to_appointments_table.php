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
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('mentee_id')->nullable()->after('mentor_id');
            $table->unsignedBigInteger('mentor_id')->nullable()->change();
            $table->foreign('mentee_id')->references('id')->on('mentees')->onDelete('set null');
            $table->dropForeign(['mentor_id']);
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign(['mentee_id']);
            $table->dropColumn('mentee_id');
            $table->dropForeign(['mentor_id']);
            $table->unsignedBigInteger('mentor_id')->nullable(false)->change();
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
        });
    }
}; 