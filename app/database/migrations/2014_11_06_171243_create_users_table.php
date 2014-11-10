<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($t){
            $t->increments('id');
            $t->string('nome', 20)->unique();
            $t->string('nomeDeUsuario', 20)->unique();
            $t->string('password',80);
            $t->string('telefone');
            $t->string('email')->unique();
            $t->boolean('ativo');
            $t->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
