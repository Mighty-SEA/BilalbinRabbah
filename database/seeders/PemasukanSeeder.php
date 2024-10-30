<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PemasukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('pemasukan')->insert([
                'id_pemasukan' => $index,
                'nama_pemasukan' => $faker->words(3, true), // nama acak 3 kata
                'uang' => $faker->numberBetween(50000, 1000000), // jumlah uang acak antara 50,000 - 1,000,000
                'tanggal' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
