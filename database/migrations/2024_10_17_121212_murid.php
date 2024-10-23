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
            $table -> id()->nullable;
            $table -> bigInteger('nis')->unique()->nullable;
            $table -> bigInteger('nisn')->unique()->nullable;
            $table -> bigInteger('nik')->unique()->nullable;
            $table -> string('nama')->nullable;
            $table -> integer('jenis_kelamin')->nullable;
            $table -> string('alamat')->nullable;
            $table -> integer('kelas');
            $table -> string('tempat_lahir')->nullable;
            $table -> date('tanggal_lahir')->nullable;
            $table -> string('asal_sekolah')->nullable;
            $table -> date('tanggal_masuk')->nullable;
            $table -> string('nama_ayah')->nullable;
            $table -> string('nama_ibu')->nullable;  
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
