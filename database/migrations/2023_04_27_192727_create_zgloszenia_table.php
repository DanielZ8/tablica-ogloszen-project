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
        Schema::create('zgloszenia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nadawca_id')->nullable();
            $table->unsignedBigInteger('odbiorca_id')->nullable();
            $table->unsignedBigInteger('ogloszenie_id')->nullable();
            $table->text('wiadomosc')->nullable();
            $table->text('wiadomosc_zwrotna')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();

            $table->foreign('nadawca_id')->references('id')->on('users') ->onDelete('cascade');
            $table->foreign('odbiorca_id')->references('id')->on('users') ->onDelete('cascade');
            $table->foreign('ogloszenie_id')->references('id')->on('ogloszenia') ->onDelete('cascade');  
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zgloszenia');
    }
};
