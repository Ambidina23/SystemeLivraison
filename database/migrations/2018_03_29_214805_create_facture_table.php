<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('facture')){
        Schema::create('facture', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dateFacture');
            $table->float('montant');
            $table->dateTime('dateLivraison');
            $table->integer('id_commande')->unsigned();

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
        Schema::dropIfExists('facture');
    }
}
