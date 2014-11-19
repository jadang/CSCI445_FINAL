<?php
class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();
		
		DB::table('users')->insert(array(
			array('id'=>0, 'FirstName'=> 'admin', 
			'LastName'=>'admin', 'username'=>'admin', 
			'password'=>Hash::make('1337'), 'isAdmin'=>true, 'FirstChoice'=>0, 
			'SecondChoice'=>1, 'ThirdChoice'=>2, 
			'FourthChoice'=>3, 'OtherInformation'=>'I am admin', 
			'PreferredStudents'=>0, 'UnPreferredStudents'=>0, 
			'ProjectOrTeam'=>' ')
		));
		$students = DB::table('students')->get();
		foreach ($students as $student) {
			DB::table('users')->insert(array(
			'FirstName'=>$student->First,
			'LastName'=>$student->Last, 
			'password'=>$student->CWID, 
			'username'=>$student->Email
			));
		}
	}
}




?>