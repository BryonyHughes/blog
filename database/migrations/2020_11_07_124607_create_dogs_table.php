<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('dogs');
        Schema::create('dogs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->double('weight',8,2);
          $table->string('breed');
          $table->string('date_of_birth');
          $table->unsignedInteger('vet_id');
          $table->unsignedInteger('owner_id');
          $table->timestamps();

          $table->foreign('vet_id')-> references('id')->on('vets')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('owner_id')-> references('id')->on('owners')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
}
