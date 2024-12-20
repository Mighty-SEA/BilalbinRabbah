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
        Schema::create('pemasukan', function(Blueprint $table){
            $table-> id ();
            $table-> integer('id_pemasukan')->unique();
            $table-> string('nama_pemasukan');
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
