<?php

use App\Dog;
use Illuminate\Database\Seeder;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $d = new Dog;
      $d->name ="Ruby";
      $d->weight=300.00;
      $d->breed="spaniel";
      $d->date_of_birth="12/05/2008";
      $d->vet_id = 1;
      $d->save();

      factory(App\Dog::class,50)->create();
    }
}
