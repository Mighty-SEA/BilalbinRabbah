<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Livewire\on;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nilai', function(Blueprint $table){
            $table->id();
            $table->bigInteger('nis');
            $table->foreign('nis')->references('nis')->on('murid')->onDelete('cascade');
            $table->bigInteger('kode_pelajaran');
            $table->foreign('kode_pelajaran')->references('kode_pelajaran')->on('pelajaran')->onDelete('cascade');
            $table->integer('nilai_tugas')->nullable();
            $table->integer('nilai_uts')->nullable();
            $table->integer('nilai_uas')->nullable();
            $table->integer('nilai_rapot')->nullable();
            $table->timestamps();
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
