<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
    	'producer_id' => $faker->numberBetween($min = 1, $max = 5),
    	'category_id' => $faker->numberBetween($min = 1, $max = 5),
        'name' => $faker->name,
        'price'=> (int)$faker->numberBetween(5, 100) * 10000,
        'price_real'=> (float)$faker->numberBetween(0.5, 0.9) ,
    ];
});
