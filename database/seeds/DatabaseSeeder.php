<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('StudentsTableSeeder');
		$this->call('ProjectsTableSeeder');
		$this->call('UsersTableSeeder');
	}

}
