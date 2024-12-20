<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    protected $table = 'pelajaran';
    protected $guarded = [];


    public function murid (){
        return $this->belongsTo(Murid::class , 'nis' , 'nis');
    }
}
