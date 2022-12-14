<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i < 10; $i++){
            DB::table('customers')->insert([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => md5(123777),
            ]);
        }
    }
}
