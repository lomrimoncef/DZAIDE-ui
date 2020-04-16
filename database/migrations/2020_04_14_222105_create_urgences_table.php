<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('urgences');

        Schema::create('urgences', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('libele');
            $table->integer('nbr_jr')->nullable();
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
        Schema::dropIfExists('urgences');

       
    }
}
