<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bill;
use Faker\Generator as Faker;

$factory->define(Bill::class, function (Faker $faker) {
    return [
       'customer_id' => $faker->numberBetween($min = 1, $max = 14),
       'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'total_money'=> (int)$faker->numberBetween(10, 1000) * 10000,
    ];
});
