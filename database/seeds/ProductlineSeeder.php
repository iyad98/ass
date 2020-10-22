<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductlineSeeder extends Seeder
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

        for ($i = 0 ; $i<100 ; $i++){
            \App\Models\Productline::create([
                'DesclnText' => $faker->text(255),
                'DesclnHtml' => $faker->text(255),
            ]);
        }
    }
}
