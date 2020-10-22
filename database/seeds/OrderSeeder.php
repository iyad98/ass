<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
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
        $cus = collect(\App\Models\Customer::get()->modelKeys());


        for ($i = 0 ; $i< 100 ; $i++) {
            \App\Models\Order::create([
                'customerID' => $cus->random(),
                'OrderDate' => now(),
                'RequiredDate' => now(),
                'Comments' => $faker->text
            ]);
        }
    }
}
