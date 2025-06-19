<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInstituteAndTrackToMenteesTable extends Migration
{
    public function up()
    {
        Schema::table('mentees', function (Blueprint $table) {
            $table->string('institute')->nullable();
            $table->string('track')->nullable();
        });
    }

    public function down()
    {
        Schema::table('mentees', function (Blueprint $table) {
            $table->dropColumn(['institute', 'track']);
        });
    }
}
