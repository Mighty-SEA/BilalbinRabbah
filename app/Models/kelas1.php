<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas1 extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $guarded = [];


    public function murid(){
        return $this->belongsTo(murid::class, 'nis' , 'nis');
    }

}
