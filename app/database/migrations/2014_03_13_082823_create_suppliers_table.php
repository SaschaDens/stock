<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('suppliers', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country_id');

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
	    Schema::drop('suppliers');
	}

}
