<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Mengambil semua NIS dari murid
        $nisList = DB::table('murid')->pluck('nis');

        // Membuat 50 data spp
        for ($i = 0; $i < 50; $i++) {
            DB::table('spp')->insert([
                'nis' => $faker->randomElement($nisList), // Mengambil NIS secara acak dari murid
                'bulan' => $faker->numberBetween(1, 12),
                'tahun' => $faker->year,
                'uang' => $faker->numberBetween(400000, 600000),
                'keterangan' => $faker->sentence(6),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
