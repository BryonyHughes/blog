<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dog;
use Faker\Generator as Faker;

$factory->define(Dog::class, function (Faker $faker) {
    return [
      'name'=> $faker->firstName(),
      'weight'=> $faker->randomfloat(2,100,500),
      'breed'=>$faker->randomElement(['Mixed Breed','Labrador Retriever','Chihuahua','Golden Retriever','German Shepherd','Yorkshire Terrier','Shih Tzu','Dachshund','Poodle','Beagle','Australian Shepherd','Maltese','Pug','French Bulldog','Pomeranian', 'Border Collie']),
      'date_of_birth'=>$faker->date(),
      'vet_id'=>App\Vet::inRandomOrder()->first()->id,
      'owner_id'=>App\Owner::inRandomOrder()->first()->id,
    ];
});
