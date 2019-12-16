<?php

use Illuminate\Database\Seeder;

class ProductType extends Seeder
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
            DB::table('ProductType')->insert([
                'Name' => $fake->name
           
            ]);
        }
    }
}
