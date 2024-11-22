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
        Schema::create('diagnose_sickness', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sickness_id');
            $table->foreign('sickness_id')->references('id')->on('sicknesses');

            $table->unsignedBigInteger('diagnose_id');
            $table->foreign('diagnose_id')->references('id')->on('diagnoses');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
