<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema:create('students',function($table) {
			$table->increments('id');
			$table->string('First');
			$table->string('Last');
			$table->string('CWID');
			$table->string('Email');
		});
		
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('FirstName');
			$table->string('LastName');
			$table->string('Email');
			$table->string('CWID');
			$table->boolean('isAdmin');
			$table->foreign('FistChoice')->references('id')->on('projects');
			$table->foriegn('SecondChoice')->references('id')->on('projects');
			$table->foreign('ThirdChoice')->references('id')->on('projects');
			$table->foreign('FourthChoice')->references('id')->on('projects');
			$table->text('OtherInformation');
			$table->foreign('PreferredStudents')->references('id')->on('teammates');
			$table->foreign('UnPreferredStudents')->references('id')->on('teammates');
			$table->string('ProjectOrTeam');
			});
			
			Schema::create('teammates', function($table){
			$table->increments('id');
			$table->string('FirstName');
			$table->string('LastName');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
		Schema::drop('students');
		Schema::drop('projects');
	}

}
