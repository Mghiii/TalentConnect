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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->date('offre_date')->default(now());
            $table->string('CV');
            $table->string('motivation_lettre');
            $table->unsignedBigInteger('trainee_id');
            $table->unsignedBigInteger('announce_id');
            $table->string('status')->default('offre_send');
            $table->timestamps();
            $table->foreign('trainee_id')->references('id')->on('trainees')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('announce_id')->references('id')->on('announces')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
