<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('competitors', function(Blueprint $t)
		{
			$t->unsignedInteger('company_id')->references('id')->on('companies');
			$t->unsignedInteger('competitor_id')->references('id')->on('companies');
			$t->boolean('is_direct');
			$t->boolean('is_clone');

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
		Schema::drop('competitors');
	}

}
