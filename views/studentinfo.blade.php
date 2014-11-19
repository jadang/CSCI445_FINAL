@extends('master')
<link rel="stylesheet" href="{{asset('bootstrap-3.0.0.min.css')}}">
@section('header')
<h1>Field Session Sign Up</h1>
@stop

@section('content')
{{Form::open()}}
<div class="form-group">
{{Form::label('First Name')}}
{{Form::text('fName')}} 
{{Form::label('Last Name')}}
{{Form::text('lName')}} 
</div>
<br>
<div class="form-group">
{{Form::label('Major')}}
{{Form::text('major')}} 
{{Form::label('Minor/ASI')}}
{{Form::text('minor')}} 
</div>
<br>
<div class="form-group">
<h2>Project Choices</h2>
{{Form::label('First Choice')}}
{{Form::select('project1',$projects->lists('Project'))}} 
<br>
{{Form::label('Second Choice')}}
{{Form::select('project2',$projects->lists('Project'))}} 
<br>
{{Form::label('Third Choice')}}
{{Form::select('project3',$projects->lists('Project'))}} 
<br>
{{Form::label('Fourth Choice')}}
{{Form::select('project4',$projects->lists('Project'))}} 
<br>
</div>
<div class="form-group">
<h2>Other Info</h2>
{{Form::label('Other - Any other experience or goals that you believe would be relevant for the projects youve selected?')}}
<br>
{{Form::textarea('other') }}
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
<h2>Want to Work With</h2>
{{Form::label('In general, is it more important to you to be on a project you selected or with preferred team members?')}}
<br>
{{Form::select('projectorteam',['Project','Team',"Doesn't Matter"])}} 
<br>
</div>



<input type="button" value="Submit" onClick="clickedButton()"/>
{{Form::close()}}


@stop

<script type = "text/javascript" language="JavaScript">
	function clickedButton() {
		
	}
</script>