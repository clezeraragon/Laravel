<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nome');
            $table->text('descrisao');
            $table->float('valor');
            $table->timestamps(); // created_at e update_st
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produto', function(Blueprint $table)
		{
			//
		});
	}

}
