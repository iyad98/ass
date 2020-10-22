<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
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
        $order = collect(\App\Models\Order::get()->modelKeys());
        $pro = collect(\App\Models\Product::get()->modelKeys());


        for ($i = 0 ; $i< 100 ; $i++) {
            \App\Models\Order_Product::create([
                'orderID' => $order->random(),
                'productCode' => $pro->random(),

            ]);
        }
    }
}
