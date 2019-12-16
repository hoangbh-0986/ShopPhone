<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $fake  = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('Customer')->insert([
                'Name' => $fake->name,
                'Add' => $fake->city,
                'Email' => $fake->unique->email,
                'PhoneNumber' => $fake->phoneNumber,
                'Password' => $fake->name
            ]);
        }
    }
}
