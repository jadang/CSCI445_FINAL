<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class ProjectSeeder extends CsvSeeder {

	public function _construct() 
	{
		$this->table = 'projects';
		$this->filename = app_path().'/database/seeds/csvs/Projects.csv';
		$this->csv_delimiter(',');
	}
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::disableQueryLog();
		//DB::table($this->table)->truncate();
		
		parent::run();
	}

}
?>
