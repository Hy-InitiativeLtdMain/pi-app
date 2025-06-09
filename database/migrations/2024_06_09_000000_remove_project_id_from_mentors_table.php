<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn('project_id');
        });
    }

    public function down()
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->nullable();
            // If you had a foreign key, you may need to add it back here as well.
            // $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
        });
    }
};
