<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrackAndInstituteToMentorTable extends Migration
{
    public function up()
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->string('track')->nullable();
            $table->string('institute')->nullable();
        });
    }

    public function down()
    {
        Schema::table('mentor', function (Blueprint $table) {
            $table->dropColumn(['track', 'institute']);
        });
    }
}
