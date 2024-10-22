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
        Schema::create('murid' , function(Blueprint $table){
            $table -> id();
            $table -> bigInteger('nis')->unique();
            $table -> bigInteger('nik')->unique();
            $table -> string('nama');
            $table -> integer('jenis_kelamin');
            $table -> string('alamat');
            $table -> string('tempat_lahir');
            $table -> date('tanggal_lahir');
            $table -> string('asal_sekolah');
            $table -> integer('kelas');
            $table -> date('tanggal_masuk');
            $table -> string('nama_ayah');
            $table -> string('nama_ibu');  
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
