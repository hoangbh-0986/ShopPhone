<?php

use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
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
            DB::table('Bill')->insert([
                'Customer_id' => $fake->numberBetween($min = 1, $max = 6),
                'Date' => date("Y-m-d H:i:s"),
                'TotalMoney' => $fake->numberBetween($min = 1000000, $max = 10000000)
               
            ]);
    }
}
}