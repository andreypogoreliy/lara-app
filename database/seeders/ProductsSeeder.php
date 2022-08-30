<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['Sex', 'Drugs', 'Rock&Roll'] as $item) {
            DB::table('products')->insert([
                'product' => $item
            ]);
        }
    }
}
