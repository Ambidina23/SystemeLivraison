<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganismePublicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('particuliers')){
        Schema::create('organisme_publics', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id');
            $table->char('nomOrganisme_public');
            $table->char('responsableDestinataire');
            $table->char('email')->unique();
            $table->float('numeroTel');
            $table->string('adresse');
            $table->integer('id_users')->unsigned()->nullable();

             $table->foreign('id_users')->references('id')->on('users');
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
        Schema::dropIfExists('organisme_publics');
    }
}
