<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class ProjectsTableSeeder extends CsvSeeder {

	public function __construct() 
	{
		$this->table = 'projects';
		$this->filename = app_path().'/database/seeds/csvs/Projects.txt';
	}
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::disableQueryLog();
		DB::table($this->table)->truncate();
		
		parent::run();
	}

}
?>
