<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->decimal('time_commitment', 8, 2)->nullable()->after('status');
        });
    }

    public function down()
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn('time_commitment');
        });
    }
};
