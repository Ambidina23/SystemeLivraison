<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('reservation')){
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference');
            $table->dateTime('date_reservation');
            $table->time('duree_operation');

            $table->integer('id_gestionnaire')->unsigned()->nullable();
            $table->string('immatriculation')->unsigned()->nullable();

            $table->foreign('id_gestionnaire')->references('id')->on('gestionnaire');
            $table->foreign('immatriculation_vehicule')->references('immatriculation')->on('vehicule');
            

            
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
        Schema::dropIfExists('reservation');
    }
}