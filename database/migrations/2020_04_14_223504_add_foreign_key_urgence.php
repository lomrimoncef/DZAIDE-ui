<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyUrgence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::table('annonces', function(Blueprint $table) {

            $table->integer('urgence_id')->unsigned()->nullable()->index();
            
            $table->foreign('urgence_id')->references('id')->on('urgences');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annonces', function(Blueprint $table) {

            $table->dropColumn('urgence_id');
            
            $table->dropForeign(['urgence_id']);
            
        });
    }
}
