<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdresseDepartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('adresse_depart')){
        Schema::create('adresse_depart', function (Blueprint $table) {
            $table->increments('id');
            $table->float('numero_rue');
            $table->string('nom_voie');
            $table->string('complement_adresse')->nullable();
            $table->float('code_postale');
            $table->string('ville');
            $table->string('pays');

            $table->integer('id_commande')->unsigned()->nullable();

           $table->foreign('id_commande')->references('id')->on('commande');
        

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
        Schema::dropIfExists('adresse_depart');
    }
}
