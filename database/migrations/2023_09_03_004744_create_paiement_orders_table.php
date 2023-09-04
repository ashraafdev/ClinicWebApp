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
        Schema::create('paiement_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patientID')->constrained('patients');
            $table->foreignId('consultationID')->nullable()->constrained('consultations');
            $table->foreignId('operationID')->nullable()->constrained('operation_consultations');
            $table->float('amount');
            $table->string('description');
            $table->smallInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiement_orders');
    }
};
