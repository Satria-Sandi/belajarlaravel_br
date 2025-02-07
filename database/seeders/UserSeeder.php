<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('users')->insert([
        //    'name' => str::random(10),
        //    'email' => str::random(10). '@text.com',
        //    'password' => Hash::make('admin123')
        //]);
      


    $faker = Faker::create('id_ID');
    for ($i=1; $i <= 5; $i++)
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker ->email. '@text.com',
            'password' => Hash::make('admin123')
        ]);
        
    }
}



