<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the modules table
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('module_title');
            $table->text('module_description');
            $table->unsignedBigInteger("course_id")->nullable();
            $table->timestamps();
        });

        // Create the lessons table
        Schema::create('module_lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')->constrained()->onDelete('cascade');
            $table->string('lesson_title');
            $table->text('lesson_content');
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
        // Drop the lessons table first due to foreign key constraint
        Schema::dropIfExists('module_lessons');

        // Drop the modules table
        Schema::dropIfExists('modules');
    }
}
