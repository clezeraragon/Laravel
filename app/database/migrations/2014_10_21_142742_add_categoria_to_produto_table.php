<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriaToProdutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produto', function(Blueprint $table)
		{
            $table->integer('categorias_id')->unsigned()->nullable();
            $table->foreign('categorias_id')->references('id')->on('categorias');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produto', function(Blueprint $table)
		{
            $table->dropForeign('produto_categorias_id_foreign');
            $table->dropColumn('categorias_id');
		});
	}

}
