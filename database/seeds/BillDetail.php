<?php

use Illuminate\Database\Seeder;

class BillDetail extends Seeder
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
            DB::table('BillDetail')->insert([
            	'Bill_id' => $fake->numberBetween($min = 1, $max = 6),
                'Product_id' => $fake->numberBetween($min = 1, $max = 6),
                'Amount' => $fake->numberBetween($min = 1, $max = 4),
                'Price' => $fake->numberBetween($min = 1000000, $max = 10000000),
                'IntoMoney' => $fake->numberBetween($min = 1000000, $max = 25000000)
               
            ]);
    }
    }
}
