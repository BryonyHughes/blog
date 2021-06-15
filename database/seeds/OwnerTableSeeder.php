<?php

use App\Owner;
use Illuminate\Database\Seeder;

class OwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $o = new Owner;
      $o ->name ="Pete";
      $o ->email ="pete.lol@gmail.com";
      $o ->phone_number="0123456789";
      $o ->dog_id= 1;
      $o ->save();

      factory(App\Owner::class,30)->create();
    }
}
