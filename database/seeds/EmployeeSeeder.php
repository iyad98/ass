<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
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
        $office = collect(\App\Models\Office::get()->modelKeys());
        $emp = collect(\App\Models\Employee::get()->modelKeys());


        for ($i = 0 ; $i< 100 ; $i++) {
            \App\Models\Employee::create([
                'officeCode' => $office->random(),
                'reportsTo' => 1,
                'LastName' => $faker->lastName,
                'FirstName' => $faker->firstName,
                'Extension' => $faker->fileExtension,
                'Email' => $faker->email,
                'JobTitle' => $faker->text(100),
            ]);
        }
    }
}
