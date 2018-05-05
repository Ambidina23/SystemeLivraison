<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            if(!Schema::hasTable('commande')){
        Schema::create('commande', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_heure_passation');
            $table->boolean('validee');
            $table->boolean('payee');
            $table->boolean('expediee');
            $table->boolean('livree');
            $table->longText('description')->nullable();
            $table->integer('id_users')->unsigned()->nullable();
            $table->integer('id_gestionnaire')->unsigned()->nullable();
            $table->integer('id_facture')->unsigned();


            $table->foreign('id_gestionnaire')->references('id')->on('gestionnaire');
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_facture')->references('id')->on('facture');
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
        Schema::dropIfExists('commande');
    }
}
