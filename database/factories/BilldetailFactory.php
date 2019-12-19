<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Billdetail;
use Faker\Generator as Faker;

$factory->define(Billdetail::class, function (Faker $faker) {
    return [
       'bill_id' => $faker->numberBetween($min = 1, $max = 10),  
       'product_id' => $faker->numberBetween($min = 1, $max = 10),  
       'amount'  => $faker->numberBetween($min = 1, $max = 4),  
        'price'=> (int)$faker->numberBetween(5, 100) * 10000,
        'into_money' => (int)$faker->numberBetween(10, 200) * 10000,

         ];
});
