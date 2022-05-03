<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateProdutosTable.
 */
class CreateProdutosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table) {
            $table->increments('id');

			$table->string('PROD_NOME');
			$table->longText('PROD_DESCRICAO');
			$table->longText('PROD_IMAGE')->nullable();
			$table->double('PROD_VALOR', 15, 2)->nullable();
			$table->integer('PROD_DESCONTO_CIELO')->nullable();
			$table->longText('PROD_LINK_CIELO')->nullable();
			$table->longText('PROD_LINK_MAGALU')->nullable();

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
		Schema::drop('produtos');
	}
}
