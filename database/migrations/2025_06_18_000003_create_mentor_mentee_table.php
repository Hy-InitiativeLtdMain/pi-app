<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorMenteeTable extends Migration
{
    public function up()
    {
        Schema::create('mentor_mentees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mentor_id');
            $table->unsignedBigInteger('mentee_id');
            $table->timestamps();

            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreign('mentee_id')->references('id')->on('mentees')->onDelete('cascade');
            $table->unique(['mentor_id', 'mentee_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentor_mentee');
    }
}
