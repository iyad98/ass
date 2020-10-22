<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $emp = collect(\App\Models\Employee::get()->modelKeys());
        $faker = Factory::create();
        for ($i = 0 ; $i< 100 ; $i++) {
            \App\Models\Customer::create([
                'Name' => $faker->name,
                'LastName' => $faker->lastName,
                'FirstName' => $faker->firstName,
                'Phone' => $faker->phoneNumber,
                'Address1' => $faker->address,
                'Address2' => $faker->address,
                'City' => $faker->city,
                'State' => $faker->state,
                'PostalCode' => rand(1,100),
                'Country' => $faker->country,
                'CreditLimit' => 15.5,
            ]);
        }

    }
}
