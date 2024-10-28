<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';
    protected $guarded = [];



    public function pelajaran() {
        return $this->belongsTo(Pelajaran::class , 'kode_pelajaran' , 'kode_pelajaran');
    }

    public function murid(){
        return $this->belongsTo(Murid::class, 'nis' , 'nis');
    }
}
