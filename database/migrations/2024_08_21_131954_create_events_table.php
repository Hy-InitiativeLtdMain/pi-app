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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('link_type')->nullable();
            $table->string('link');
            $table->string('link_password')->nullable();
            $table->date('date'); // YYYY-MM-DD
            $table->time('time'); // HH:MM:SS
            $table->string('image')->nullable();
            $table->string('image_id')->nullable();
            $table->string('file')->nullable();
            $table->string('file_id')->nullable();
            $table->string('institute')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
