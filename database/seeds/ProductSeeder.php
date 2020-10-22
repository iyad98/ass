<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        $product_lines = collect(\App\Models\Productline::get()->modelKeys());

        for ($i = 0 ; $i< 100 ; $i++){
            \App\Models\Product::create([
                'Name' => $faker->name,
                'Scale' => rand(),
                'vendor' => $faker->text(255),
                'PdtDescription' => $faker->text(255),
                'QtyInStock' => rand(),
                'BuyPrice' => 19,
                'MSRP' => $faker->text(255),
                'ProductlineID' => $product_lines->random(),

            ]);
        }

    }
}
