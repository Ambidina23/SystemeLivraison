<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('gestionnaire')){
        Schema::create('gestionnaire', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->float('numeroTel');
            $table->string('email')->unique();
            $table->integer('id_user')->unsigned();

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
        Schema::dropIfExists('gestionnaire');
    }
}
