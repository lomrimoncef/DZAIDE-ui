<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('annonce_user');

        Schema::create('reponses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable()->index(); // id de la personne qui a traité l'annonce
            $table->integer('annonce_id')->unsigned()->nullable()->index();
            $table->dateTime('date_reponse')->nullable();
            $table->string('avis')->nullable();
            $table->integer('note')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users');
            $table->foreign('annonce_id')
            ->references('id')->on('annonces');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponses');
    }
}
