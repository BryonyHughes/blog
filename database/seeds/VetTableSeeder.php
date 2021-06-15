<?php

use App\Vet;
use Illuminate\Database\Seeder;

class VetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $v = new Vet;
      $v->name = "Billy Smith";
      $v->email="Lol@gmail.com";
      $v->phone_number="01224565432";
      $v->save();

      factory(App\Vet::class,10)->create();
    }
}
