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
</div>
<br>
<div class="form-group">
<h1>Project Choices</h1>
{{Form::label('First Choice')}}
{{Form::select('project1',$project_options)}} 
<br>
{{Form::label('Second Choice')}}
{{Form::select('project2',$project_options)}} 
<br>
{{Form::label('Third Choice')}}
{{Form::select('project3',$project_options)}} 
<br>
{{Form::label('Fourth Choice')}}
{{Form::select('project4',$project_options)}} 
<br>
</div>


<input type="button" value="Submit" onClick="clickedButton()"/>
{{Form::close()}}


@stop

<script type = "text/javascript" language="JavaScript">
	function clickedButton() {
		
	}
</script>