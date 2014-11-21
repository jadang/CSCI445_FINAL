<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::model('student', 'Student');
Route::model('project', 'Project');
Route::get('/', function()
{
	return Redirect::to('login');
});
Route::get('login', function()
{
	$students = Student::all();
	return View::make('login')
	->with('students', $students);
});

Route::post('login', function(){
  if(Auth::attempt(Input::only('username', 'password')))
    return Redirect::intended('studentinfo');
  else
    return Redirect::back()
      ->withInput()
      ->with('error', "Invalid credentials");
});

Route::group(array('before'=>'auth'), function(){

Route::get('studentinfo', function()
{
	if(Auth::user()->isAdmin)
		return Redirect::to('adminpage');
	$projects = Project::all();
	$students = Student::all();
	return View::make('studentinfo')
	->with('projects', $projects)
	->with('students', $students);
});

Route::get('adminpage', function()
{
	$projects = Project::all();
	$students = Student::all();
	return View::make('adminpage')
	->with('projects', $projects)
	->with('students', $students);
});

Route::post('studentinfo', function(){
   DB::table('users')->where('id', '=', Auth::id())
	->update(array('FirstName' => Input::get('fName'),
	'LastName' => Input::get('lName'),
	'Major' => Input::get('major'),
	'Minor' => Input::get('minor'),
	'FirstChoice' => Input::get('project1'),
	'SecondChoice' => Input::get('project2'),
	'ThirdChoice' => Input::get('project3'),
	'FourthChoice' => Input::get('project4'),
	'OtherInformation' => Input::get('other'),
	'UnpreferredStudents' => Input::get('dontWantWork[]'),
	'PreferredStudents' => Input::get('wantWork[]'),
	'ProjectOrTeam' => Input::get('projectorteam')
	));
	return Redirect::intended('studentinfo');
});
Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('/');
});

Route::get('students/{id}', function($id) {
	$student = User::find($id+1);
	$projects = Project::all();
	return View::make('students.single')
	->with('projects', $projects)
	->with('student', $student);
});
});