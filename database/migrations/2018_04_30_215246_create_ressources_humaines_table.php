<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRessourcesHumainesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('gestionnaire')){
        Schema::create('ressources_humaines', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nom');
            $table->char('prenom');
            $table->float('numeroTel');
            $table->string('adresse');
            $table->char('email')->unique();
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
        Schema::dropIfExists('ressources_humaines');
    }
}
