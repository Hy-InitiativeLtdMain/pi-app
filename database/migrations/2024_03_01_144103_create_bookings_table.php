<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentee_id')->constrained('mentees');
            $table->foreignId('mentor_availability_id')->constrained('mentor_availabilities');
            $table->foreignId('mentor_id')->constrained('mentors');
            $table->date('date');
            $table->time('time');
            $table->string('reason')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
