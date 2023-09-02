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
        Schema::create('dep_ser_linkings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('infirmierID')->nullable()->constrained('users');
            $table->foreignId('medecinID')->nullable()->constrained('users');
            $table->foreignId('dep_ser_ID')->constrained('dep_sers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dep_ser_linkings');
    }
};
