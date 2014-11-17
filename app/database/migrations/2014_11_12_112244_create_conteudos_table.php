<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConteudosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conteudos', function($table){
            $table->increments('id');
            $table->string('alias', 20);
            $table->string('titulo', 80);
            $table->longtext('texto');
            $table->boolean('publicado')->default(1);
            $table->timestamps();
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('conteudos');
	}

}
