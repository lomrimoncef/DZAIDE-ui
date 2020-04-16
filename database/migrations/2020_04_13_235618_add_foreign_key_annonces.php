<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyAnnonces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonces', function (Blueprint $table) {


            $table->foreign('catannonce_id')
                    ->references('id')->on('catannonces');
        });

        Schema::table('annonce_user', function (Blueprint $table) {


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
        Schema::table('annonces', function (Blueprint $table) {
       

            $table->dropForeign(['catannonce_id']);
        });

        Schema::table('annonce_user', function (Blueprint $table) {
       

            $table->dropForeign(['annonce_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
