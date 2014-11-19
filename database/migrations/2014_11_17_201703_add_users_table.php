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
		Schema::create('students',function($table) {
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
			$table->string('username');
			$table->string('password');
			$table->boolean('isAdmin');
			$table->integer('FirstChoice')->references('id')->on('projects');
			$table->integer('SecondChoice')->references('id')->on('projects');
			$table->integer('ThirdChoice')->references('id')->on('projects');
			$table->integer('FourthChoice')->references('id')->on('projects');
			$table->text('OtherInformation');
			$table->integer('PreferredStudents')->references('id')->on('teammates');
			$table->integer('UnPreferredStudents')->references('id')->on('teammates');
			$table->string('ProjectOrTeam');
			$table->string('remember_token')->nullable();
			$table->timestamps();
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
