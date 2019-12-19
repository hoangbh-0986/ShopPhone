<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
               'name' => $faker->name,
               'add' => $faker->streetAddress,
               'email' => $faker->email ,
               'phone_number' => $faker->phoneNumber,
               'password' => $faker->password,
    ];
});
