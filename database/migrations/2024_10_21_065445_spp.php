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
        Schema::create('spp', function(Blueprint $table){
            $table->id();
            $table->integer('uang');
            $table->bigInteger('nis'); // Pastikan tipe data sesuai dengan kolom 'nis' di tabel murid
            $table->foreign('nis_murid')->references('nis')->on('murid')->onDelete('cascade');    
            $table->integer('bulan');        
            $table->integer('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spp');
    }
};
