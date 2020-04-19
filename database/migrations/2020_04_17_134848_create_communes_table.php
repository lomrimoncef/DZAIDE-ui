<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communes', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('code_postal')->nullable();
            $table->string('nom')->nullable();
            $table->integer('ville_id')->unsigned()->index();
            $table->timestamps();
            
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communes');
    }
}
