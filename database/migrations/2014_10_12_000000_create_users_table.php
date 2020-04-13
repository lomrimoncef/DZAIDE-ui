<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('prenom')->nullable();
            $table->integer('phone_number')->nullable();
            $table->boolean('active')->default(false);
            $table->integer('ville_id')->unsigned()->nullable()->index();
            $table->integer('badge_id')->unsigned()->nullable()->index();
            $table->boolean('sex')->nullable();
            $table->string('adresse')->nullable();
            $table->date('date_naissance')->nullable();

            $table->integer('profession_id')->unsigned()->nullable()->index();
            $table->integer('servicep_id')->unsigned()->nullable()->index();

            $table->string('nom_association')->nullable();
            $table->integer('domaine_id')->unsigned()->nullable()->index();



            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
