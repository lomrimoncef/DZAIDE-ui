<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiviteUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite_user', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('activite_id')->unsigned()->nullable()->index();

            $table->integer('user_id')->unsigned()->nullable()->index();

            $table->boolean('like')->default(false);
            $table->string('commentaire')->nullable();
            $table->date('date_commentaire')->nullable();



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
        Schema::dropIfExists('activite_user');
    }
}
