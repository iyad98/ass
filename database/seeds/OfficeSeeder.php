<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
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

        for ($i = 0 ; $i< 100 ; $i++) {
            \App\Models\Office::create([
                'City' => $faker->city,
                'Phone' => $faker->phoneNumber,
                'Address1' => $faker->address,
                'Address2' => $faker->address,
                'State' => $faker->state,
                'Country' => $faker->country,
                'PostalCode' => rand(1,100),
                'Territory' => $faker->text(200)
            ]);
        }
        }
}
