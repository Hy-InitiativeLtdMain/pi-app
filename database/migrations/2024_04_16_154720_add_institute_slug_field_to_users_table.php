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
        // if the table already exists, we don't want to run this migration again.
        if (Schema::hasColumn('users', 'institute_slug')) {
            return;
        }
        Schema::table('users', function (Blueprint $table) {
            $table->string('institute_slug')->default('wesonline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
