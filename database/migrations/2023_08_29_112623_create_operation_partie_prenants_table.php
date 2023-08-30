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
        Schema::create('operation_partie_prenants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operationID')->constrained('operation_consultations');
            $table->foreignId('partiePrenantID')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_partie_prenants');
    }
};
