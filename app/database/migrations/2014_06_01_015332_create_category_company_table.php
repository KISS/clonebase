<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_company', function(Blueprint $t)
		{
			$t->unsignedInteger('category_id')->references('id')->on('categories');
			$t->unsignedInteger('company_id')->references('id')->on('companies');

			//created_at, updated_at DATETIME
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
		Schema::drop('category_company');
	}

}
