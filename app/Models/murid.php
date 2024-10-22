<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table = 'murid';
    protected $guarded = [];
    use HasFactory;

    public function spp(){
        return $this->hasMany(murid::class, 'nis', 'nis');
    }



    public function kelas(){
        return $this->hasMany(kelas1::class, 'nis', 'nis');
    }

    
}
