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
            $table -> id();
            $table -> bigInteger('nis');
            $table -> foreign('nis')->references('nis')->on('murid');
            $table -> integer('bulan');
            $table -> integer ('tahun');
            $table -> integer('uang');
            $table -> string('keterangan')->nullable();
            $table -> timestamps();

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