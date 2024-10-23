<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table='pembayaran';
    protected $guarded=[];

    use HasFactory;

    public function murid(){
        return $this->belongsTo(murid::class, 'nis', 'nis');
}
}