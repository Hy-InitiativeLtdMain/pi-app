<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesAndFlashcardsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('quizzes');
        // Create the quizzes table
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->json('options')->nullable(); // Options can be null for fill-in-the-blank and short answer questions
            $table->string('correct_answer');
            $table->unsignedBigInteger("course_id")->nullable();
            $table->timestamps();
        });

        // Create the flashcards table
        Schema::create('flashcards', function (Blueprint $table) {
            $table->id();
            $table->string('front');
            $table->text('back');
            $table->unsignedBigInteger("course_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the quizzes table
        Schema::dropIfExists('quizzes');

        // Drop the flashcards table
        Schema::dropIfExists('flashcards');
    }
}
