<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table = 'murid';
    protected $guarded = [];
    use HasFactory;

    public function getJenisKelaminLabelAttribute()
    {
        return $this->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan';
    }
}
