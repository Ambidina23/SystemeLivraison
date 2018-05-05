<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdresseDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('adresse_destinations')){
        Schema::create('adresse_destinations', function (Blueprint $table) {
            $table->increments('id');
            $table->float('numero_rue');
            $table->string('nom_voie');
            $table->string('complement_adresse');
            $table->float('code_postale');
            $table->string('ville');
            $table->string('pays');
            
            $table->integer('id_commande')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('id_commande')->references('id')->on('commande');
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
        Schema::dropIfExists('adresse_destinations');
    }
}
