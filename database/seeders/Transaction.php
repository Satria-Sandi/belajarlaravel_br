<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Transaction extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=10; $i++ ){
            DB::table('Transaction')->insert([
                'user_id' => $faker->numberBetween(1, 10),
                'name' => $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'date' => $faker->date,
                'court_id' => $faker->numberBetween(1, 10),
                'Starttime' => $faker->time(),
                'Endtime' => $faker->time(),
                'costume' => $faker->boolean(),
                'shoes' => $faker->boolean(),
                'Grandtotal' => $faker->numberBetween(100000, 2000000),
                'Paytotal' => $faker->numberBetween(100000, 2000000)
            ]);
        }
    }
}