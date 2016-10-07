<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealersTable extends Migration {

	public function up()
	{
		Schema::create('dealers', function(Blueprint $table) {
			$table->increments('id');

			$table->string('dealer')->index();
			$table->string('contact_person')->nullable();
			$table->string('mobile')->nullable();
			$table->string('phone')->nullable();
			$table->string('hours_opening_mf')->nullable();
			$table->string('hours_closing_mf')->nullable();
			$table->string('hours_opening_sat')->nullable();
			$table->string('hours_closing_sat')->nullable();
			$table->string('hours_opening_sun')->nullable();
			$table->string('hours_closing_sun')->nullable();
			$table->string('company_phone')->nullable();
			$table->string('toll_free')->nullable();
			$table->string('public_email')->nullable();
			$table->string('support_email')->nullable();
			$table->integer('location_id')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('dealers');
	}
}