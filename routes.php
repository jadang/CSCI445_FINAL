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
Route::get('studentinfo', function()
{
	if(Auth::user()->isadmin)
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
View::composer('studentinfo', function($view)
{
 $projects = Project::all();
 if(count($projects) > 0){
 $project_options = array_combine($projects->lists('id'), 
 $projects->lists('Project'));
 } else {
 $project_options = array(null, 'Unspecified');
 }
 $view->with('project_options', $project_options);
});
Route::post('login', function(){
  if(Auth::attempt(Input::only('username', 'password')))
    return Redirect::intended('studentinfo');
  else
    return Redirect::back()
      ->withInput()
      ->with('error', "Invalid credentials");
});
Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('/');
});

Route::get('students/{id}', function($id) {
	$student = User::find($id+1);
	return View::make('students.single')
	->with('student', $student);
});
