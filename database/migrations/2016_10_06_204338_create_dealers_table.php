<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->string('id');
            $table->string('dealer');
            $table->string('contact_person');
            $table->string('mobile');
            $table->string('phone');
            $table->string('hours_opening_mf');
            $table->string('hours_closing_mf');
            $table->string('hours_opening_sat');
            $table->string('hours_closing_sat');
            $table->string('hours_opening_sun');
            $table->string('hours_closing_sun');
            $table->string('company_phone');
            $table->string('toll_free');
            $table->string('public_email');
            $table->string('support_email');
            $table->integer('location_id')->unsigned();
            $table->softDeletes();
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dealers');
    }
}
