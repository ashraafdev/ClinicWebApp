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
        Schema::create('mesure_images', function (Blueprint $table) {
            $table->id();
            $table->string('imageName');
            $table->foreignId('consultationsID')->nullable()->constrained('consultations');
            $table->foreignId('operationsID')->nullable()->constrained('operation_consultations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesure_images');
    }
};
