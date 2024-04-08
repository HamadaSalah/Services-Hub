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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->string('time')->nullable();
            $table->string('location')->nullable();
            $table->foreignId('car_id')->nullable()->constrained('cars')->onDelete('CASCADE');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
