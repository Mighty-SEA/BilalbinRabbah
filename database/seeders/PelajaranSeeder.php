<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelajaran')->insert([
            ['kode_pelajaran' => 101, 'nama_pelajaran' => 'akidah', 'tahun' => 2024, 'created_at' => now(), 'updated_at' => now()],
            ['kode_pelajaran' => 102, 'nama_pelajaran' => 'akhlak', 'tahun' => 2024, 'created_at' => now(), 'updated_at' => now()],
            ['kode_pelajaran' => 103, 'nama_pelajaran' => 'ski', 'tahun' => 2024, 'created_at' => now(), 'updated_at' => now()],
            ['kode_pelajaran' => 104, 'nama_pelajaran' => 'quran', 'tahun' => 2024, 'created_at' => now(), 'updated_at' => now()],
            ['kode_pelajaran' => 105, 'nama_pelajaran' => 'hadis', 'tahun' => 2024, 'created_at' => now(), 'updated_at' => now()],
            ['kode_pelajaran' => 106, 'nama_pelajaran' => 'fikih', 'tahun' => 2024, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
