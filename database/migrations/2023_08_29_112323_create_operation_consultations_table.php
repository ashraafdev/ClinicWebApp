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
        Schema::create('operation_consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultationID')->constrained('consultations');
            $table->string('blocOperatoire');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->string('observation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_consultations');
    }
};
