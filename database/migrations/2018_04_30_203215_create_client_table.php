<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('client')){
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('id_user')->unsigned()->nullable();

            $table->foreign('id_user')->references('id')->on('users');

          
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
