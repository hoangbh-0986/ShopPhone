<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([
            BilldetailTableSeeder::class,
            BillTableSeeder::class,
            CategoryTableSeeder::class,
            CustomerTableSeeder::class,
            ProducerTableSeeder::class,
            ProductTableSeeder::class 
        ]);

    }
}