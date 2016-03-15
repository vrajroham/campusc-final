<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollegeRegistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collegeRegistrations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('registration_id')->unique();
			$table->string('college_name');
			$table->string('university');
			$table->string('address');
			$table->string('state');
			$table->string('district');
			$table->string('cname');
			$table->string('mobile')->unique();
			$table->string('email')->unique();
			$table->string('designation');
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
		Schema::drop('collegeRegistrations');
	}

}
