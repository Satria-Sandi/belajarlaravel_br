<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;


class Court extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 10 ; $i++) { 
            DB::table('Court')->insert([
                'court_type_id' => $faker->numberBetween(1, 10),
                'name' => $faker->word,
                'price' => $faker->numberBetween(100000,300000),
            ]);
        };
    }
}