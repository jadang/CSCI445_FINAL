<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class StudentsTableSeeder extends CsvSeeder {

	public function __construct() 
	{
		$this->table = 'students';
		$this->filename = app_path().'/database/seeds/csvs/Students.txt';
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
		Hash::make('CWID');
	}

}
?>
