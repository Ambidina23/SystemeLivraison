<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if(!Schema::hasTable('mission')){
        Schema::create('mission', function (Blueprint $table) {
            $table->increments('id');
            $table->time('durree_mission');
            $table->date('date_mission');

            $table->integer('id_Commande')->unsigned()->nullable();
            $table->integer('id_ressource_humaine')->unsigned()->nullable();
            $table->integer('id_gestionnaire')->unsigned()->nullable();

            $table->foreign('id_Commande')->references('id')->on('commande');
            $table->foreign('id_ressource_humaine')->references('id')->on('ressources_humaines');
            $table->foreign('id_gestionnaire')->references('id')->on('gestionnaire');
            

            $table->timestamps();
        });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mission');
    }
}
