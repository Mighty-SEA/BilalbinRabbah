<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $pelList = DB::table('pelajaran')->pluck('kode_pelajaran');
        $nisList = DB::table('murid')->pluck('nis');


        for ($i = 0; $i < 50;  $i++) {
            DB::table('nilai')->insert([
                'kode_pelajaran' => $faker->randomElement($pelList),
                'nis' => $faker->randomElement($nisList),
                'nilai_tugas' => $faker->numberBetween(40, 92),
                'nilai_uts' => $faker->numberBetween(40, 92),
                'nilai_uas' => $faker->numberBetween(40, 92),
                'nilai_rapot' => $faker->numberBetween(40, 92),
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }

    }
}
