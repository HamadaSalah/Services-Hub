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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('price')->nullable();
            $table->string('assurance')->nullable();
            $table->string('number')->nullable();
            $table->string('licence_file')->nullable();
            $table->string('kilos')->nullable();
            $table->string('with_driver')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('company_id')->nullable()->constrained('companies')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
