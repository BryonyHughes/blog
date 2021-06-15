<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
      'name'=> $faker->name(),
      'email'=>$faker->freeEmail(),
      'phone_number'=>$faker->phoneNumber(),
    ];
});
