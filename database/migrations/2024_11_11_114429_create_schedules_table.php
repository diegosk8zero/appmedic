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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->dateTime('initiate');
            $table->dateTime('finish');
            $table->boolean('status');
            $table->text('description');
            $table->unsignedBigInteger('medic_id');
            $table->foreign('medic_id')->references('id')->on('medics');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
