<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vet;
use Faker\Generator as Faker;

$factory->define(Vet::class, function (Faker $faker) {
    return [
      'name'=> $faker->name(),
      'email'=>$faker->freeEmail(),
      'phone_number'=>$faker->phoneNumber(),
    ];
});
