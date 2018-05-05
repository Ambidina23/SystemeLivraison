<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   if(!Schema::hasTable('vehicule')){
        Schema::create('vehicule', function (Blueprint $table) {
            $table->string('immatriculation');
            $table->primary('immatriculation');
            $table->float('capacite_volume');
            $table->float('capacite_poids');


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
        Schema::dropIfExists('vehicule');
    }
}
