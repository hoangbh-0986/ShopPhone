<?php

use Illuminate\Database\Seeder;

class BilldetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $count = 10;
        factory(App\Billdetail::class, $count)->create();
    }
}
