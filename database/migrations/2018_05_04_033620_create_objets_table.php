<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           if(!Schema::hasTable('objets')){
        Schema::create('objets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->float('poids');
            $table->char('fragilite');
            $table->char('nature');
            $table->float('valeur');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('objets');
    }
}
