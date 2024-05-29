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
        Schema::table('bookings', function (Blueprint $table) {
            // Drop existing foreign key constraint
            $table->dropForeign(['mentor_id']);
            $table->dropForeign(['mentee_id']);

            // Add new foreign key constraint with onDelete('cascade')
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreign('mentee_id')->references('id')->on('mentees')->onDelete('cascade');
        });

        Schema::table('mentor_availabilities', function (Blueprint $table) {
            // Drop existing foreign key constraint
            $table->dropForeign(['mentor_id']);

            // Add new foreign key constraint with onDelete('cascade')
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
        });

        Schema::table('mentees', function (Blueprint $table) {
            // Drop existing foreign key constraint
            $table->dropForeign(['user_id']);

            // Add new foreign key constraint with onDelete('cascade')
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
