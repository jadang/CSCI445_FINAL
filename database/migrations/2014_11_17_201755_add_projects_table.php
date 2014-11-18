<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('projects', function($table){
			$table->increments('id');
			$table->string('Client');
			$table->string('Project');
			$table->integer('MinPeople');
			$table->integer('MaxPeople');
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
		Schema::drop('projects');
	}

}
