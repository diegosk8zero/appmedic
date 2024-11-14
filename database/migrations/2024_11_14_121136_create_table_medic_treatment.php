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
        Schema::create('medic_treatment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medic_id');
            $table->foreign('medic_id')->references('id')->on('medics');
            $table->unsignedBigInteger('treatment');
            $table->foreign('treatment')->references('id')->on('sicknesses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_medic_treatment');
    }
};
