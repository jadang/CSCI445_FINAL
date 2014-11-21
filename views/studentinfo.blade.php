@extends('master')
<link rel="stylesheet" href="{{asset('bootstrap-3.0.0.min.css')}}">
@section('header')
<h1>Field Session Sign Up</h1>
@stop

@section('content')
{{Form::open()}}
<div class="form-group">
{{Form::label('First Name')}}
{{Form::text('fName', Auth::user()->FirstName)}} 
{{Form::label('Last Name')}}
{{Form::text('lName', Auth::user()->LastName)}} 
</div>
<br>
<div class="form-group">
{{Form::label('Major')}}
{{Form::text('major', Auth::user()->Major)}} 
{{Form::label('Minor/ASI')}}
{{Form::text('minor', Auth::user()->Minor)}} 
</div>
<br>
<div class="form-group">
<h2>Project Choices</h2>
{{Form::label('First Choice')}}
{{Form::select('project1',$projects->lists('Project'), Auth::user()->FirstChoice)}} 
<br>
{{Form::label('Second Choice')}}
{{Form::select('project2',$projects->lists('Project'), Auth::user()->SecondChoice)}} 
<br>
{{Form::label('Third Choice')}}
{{Form::select('project3',$projects->lists('Project'), Auth::user()->ThirdChoice)}} 
<br>
{{Form::label('Fourth Choice')}}
{{Form::select('project4',$projects->lists('Project'), Auth::user()->FourthChoice)}} 
<br>
</div>
<div class="form-group">
<h2>Other Info</h2>
{{Form::label('Other - Any other experience or goals that you believe would be relevant for the projects youve selected?')}}
<br>
{{Form::textarea('other', Auth::user()->OtherInformation) }}
<br>
</div>

<div class="form-group">
<?php
$names = array();
foreach($students as $s){
	$names[] = $s->First ." ". $s->Last;
}
?>
<h2>Don't Want to Work With</h2>
{{Form::label('Any students you DO NOT want to work with (CTRL-click for mutiple selections):')}}
<br>
{{Form::select('dontWantWork[]', $names, null, ['multiple' => true]) }}
<br>
</div>
<div class="form-group">
<h2>Want to Work With</h2>
{{Form::label('Any students you DO want to work with (CTRL-click for mutiple selections):')}}
<br>
{{Form::select('wantWork[]', $names, null, ['multiple' => true]) }}
<br>
</div>

<div class="form-group">
<h2>Prefer Project or Team</h2>
{{Form::label('In general, is it more important to you to be on a project you selected or with preferred team members?')}}
<br>
{{Form::select('projectorteam',['Project'=>'Project','Team'=>'Team','Either'=>"Doesn't Matter"], Auth::user()->ProjectOrTeam)}} 
<br>
</div>



{{Form::submit('Submit')}}
{{Form::close()}}


@stop

<script type = "text/javascript" language="JavaScript">
	function clickedButton() {
		
	}
</script>