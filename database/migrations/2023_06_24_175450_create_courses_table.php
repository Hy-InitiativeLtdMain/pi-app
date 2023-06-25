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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->decimal('price', 15)->default(0);
            $table->string('cover_type')->nullable();
            $table->string('cover_url')->nullable();
            $table->string('cover_url_id')->nullable();
            $table->string('description')->nullable();

            $table->boolean('published')->default(false);

            $table->unsignedBigInteger("category_id")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
