<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        for($i = 0; $i < 10000; $i++){
            DB::table('murid')->insert([
                'nis' => $faker->unique()->numberBetween(100000, 999999),
                'nisn' => $faker->unique()->numberBetween(1000000000, 9999999999),
                'nik' => $faker->unique()->numberBetween(1000000000000000, 9999999999999999),
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->numberBetween(0, 1), // 0 untuk perempuan, 1 untuk laki-laki
                'alamat' => $faker->address,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date(),
                'asal_sekolah' => $faker->company,
                'kelas' => $faker->numberBetween(1,6),
                'tanggal_masuk' => $faker->date(),
                'nama_ayah' => $faker->name('male'),
                'nama_ibu' => $faker->name('female'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
