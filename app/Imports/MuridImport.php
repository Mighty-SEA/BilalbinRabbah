<?php

namespace App\Imports;

use App\Models\Murid;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MuridImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Murid([
            'id'             => $row('id'),
            'nis'            => $row['nis'],
            'nisn'           => $row['nisn'],
            'nik'            => $row['nik'],
            'nama'           => $row['nama'],
            'jenis_kelamin'  => $row['jenis_kelamin'],
            'alamat'         => $row['alamat'],
            'tempat_lahir'   => $row['tempat_lahir'],
            'tanggal_lahir'  => $row['tanggal_lahir'],
            'asal_sekolah'   => $row['asal_sekolah'],
            'kelas'          => $row['kelas'],
            'tanggal_masuk'  => $row['tanggal_masuk'],
            'nama_ayah'      => $row['nama_ayah'],
            'nama_ibu'       => $row['nama_ibu'],
            'created_at'     => $row['created_at'] ?? now(),
            'updated_at'     => $row['updated_at'] ?? now(),
        ]);
    }
}
