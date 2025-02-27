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
        Schema::create('baju', function (Blueprint $table) {
            $table->id();
            $table->string('namabaju');
            $table->integer('size');
            $table->integer('harga');
            $table->unsignedBigInteger('model_id');

            $table->foreign('model_id')->references('id')->on('models');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baju');
    }
};
