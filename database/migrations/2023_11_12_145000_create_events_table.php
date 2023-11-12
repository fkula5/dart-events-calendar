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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256);
            $table->string('description', 256);
            $table->unsignedBigInteger('venue_id');
            $table->dateTime('start_time');
            $table->dateTime('finish_time');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
