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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number')->unique();
            $table->string('departure_airport');
            $table->string('destination_airport');
            $table->string('ending_airport');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->unsignedBigInteger('plane_id');
            $table->timestamps();

            $table->foreign('plane_id')
                ->references('id')
                ->on('planes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
