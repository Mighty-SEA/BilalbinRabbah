<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('pengeluaran')->insert([
                'nama_pengeluaran' => $faker->words(3, true), // nama acak 3 kata
                'uang' => $faker->numberBetween(50000, 1000000), // jumlah uang acak antara 50,000 - 1,000,000
                'tanggal' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
