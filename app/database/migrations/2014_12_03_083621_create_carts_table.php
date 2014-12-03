<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('userId')->unsigned();
            $table->integer('productId')->unsigned();
			$table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('productId')->references('id')->on('products');

            $table->unique(array('userId', 'productId'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carts');
	}

}
