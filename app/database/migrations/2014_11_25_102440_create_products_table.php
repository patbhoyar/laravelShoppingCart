<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->tinyInteger('productType')->default(0);
            $table->string('name');
            $table->text('description');
            $table->integer('category')->unsigned();
            $table->integer('brand')->unsigned();
            $table->string('image');
            $table->float('price');
            $table->float('discount');
            $table->float('rating');
            $table->integer('sellerId')->unsigned();
            $table->integer('hits')->default(0);
            $table->timestamps();

            $table->foreign('sellerId')->references('id')->on('users');
            $table->foreign('category')->references('id')->on('categories');
            $table->foreign('brand')->references('id')->on('brands');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
