<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');


            $table->string('titre')->nullable();
            $table->string('details')->nullable();
            $table->date('date_annonce')->nullable();
            $table->date('date_publication')->nullable();
            $table->boolean('publier')->default(false);
            $table->boolean('traiter')->default(false);
            $table->date('date_traitement')->nullable();
            $table->string('valider_par')->nullable();
            $table->integer('catannonce_id')->unsigned()->nullable()->index();


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
        Schema::dropIfExists('annonces');
    }
}
