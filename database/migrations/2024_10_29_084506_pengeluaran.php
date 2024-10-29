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
        Schema::create('pengeluaran', function(Blueprint $table){
            $table-> id ();
            $table-> integer('id_pengeluaran')->unique();
            $table-> string('nama_pengeluaran');
            $table-> integer('uang');
            $table-> date('tanggal');
            $table-> timestamps();
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
