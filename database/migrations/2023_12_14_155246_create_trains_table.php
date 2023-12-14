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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('depearture_station');
            $table->string('arrival_station');
            $table->dateTime('departure_time');
            $table->dateTime('arrive_time');
            $table->string('train_code');
            $table->tinyInteger('coach_number')->unsigned(); //unsigned per impedire numeri negativi
            $table->boolean('confirmed')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
