<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table = 'murid';
    protected $guarded = [];
    use HasFactory;

<<<<<<< HEAD
    public function spp(){
        return $this->hasMany(murid::class, 'nis', 'nis');
    }



    public function kelas(){
        return $this->hasMany(kelas1::class, 'nis', 'nis');
    }

    
=======
<<<<<<< HEAD

=======
    public function getJenisKelaminLabelAttribute()
    {
        return $this->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan';
    }
>>>>>>> 5d87436 (	new file:   .editorconfig)
>>>>>>> 83dcdb33ae5aff8d9ac736e312d61c9395b3bc9a
}
