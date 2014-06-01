<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $t)
		{
			$t->increments('id');
			$t->string('website');
			$t->string('name');
			$t->date('founded_on');
			$t->text('description');
			$t->string('location');
			$t->string('country');

			$t->string('stage');
			$t->integer('funding_total');
			$t->string('funding_currency');

			$t->string('angellist');
			$t->string('crunchbase');
			$t->string('twitter');
			$t->string('linkedin');

			$t->boolean('is_website');
			$t->boolean('is_app');
			$t->boolean('is_widget');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies');
	}

}
