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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('certificate')->nullable();
            $table->string('comment')->nullable();
            $table->unsignedBigInteger('offre_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('trainee_id');
            $table->timestamps();

            $table->foreign('offre_id')->references('id')->on('offres')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('trainee_id')->references('id')->on('trainees')->cascadeOnUpdate()->cascadeOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
