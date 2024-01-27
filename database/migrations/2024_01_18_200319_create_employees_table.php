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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('description')->nullable();
            $table->string('password')->nullable();
            $table->string('card_id')->nullable();
            $table->string('licence')->nullable();
            $table->string('photo')->nullable();
            $table->string('intro_video')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            //foreignkeys
            $table->foreignId('job_id')->nullable()->constrained('jobs')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
