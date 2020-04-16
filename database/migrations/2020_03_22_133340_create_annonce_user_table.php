<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_user', function (Blueprint $table) { // table réponses
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable()->index(); // id de l'annonceur
            $table->integer('annonce_id')->unsigned()->nullable()->index();
            $table->date('date_reponse')->nullable();
            $table->string('traiteur')->nullable(); // id de la personne qui a traité la requette
            $table->string('avis')->nullable();
            $table->integer('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce_user');
    }
}
