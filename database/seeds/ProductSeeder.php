<?php

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
      $fake  = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('Product')->insert([
            	'Producer_id' => $fake->numberBetween($min = 1, $max = 6),
                'ProductType-id' => $fake->numberBetween($min = 1, $max = 6),
                'Name' => 	$fake->name,
                'Price' => $fake->numberBetween($min = 1000000, $max = 15000000),
                'PriceReal' => $fake->numberBetween($min = 1000000, $max = 10000000)
               
            ]);
    }
    }
}
