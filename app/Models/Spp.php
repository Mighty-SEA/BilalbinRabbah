<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $table = 'spp';
    protected $guarded = [];


    public function Murid(){
        return $this->belongsTo(Murid::class , 'nis' , 'nis');
    }
}
