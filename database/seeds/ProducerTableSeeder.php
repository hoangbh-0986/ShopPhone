<?php

use Illuminate\Database\Seeder;

class ProducerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $fake  = Faker\Factory::create();
        $limit = 5;

        for ($i = 0; $i < $limit; $i++){
            DB::table('Producer')->insert([
                'Name' => $fake->name
           
            ]);
        }
    }
}
