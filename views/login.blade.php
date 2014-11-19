@extends('master')
<link rel="stylesheet" href="{{asset('bootstrap-3.0.0.min.css')}}">
@section('header')
<h1>Field Session Login</h1>
@stop

@section('content')
{{Form::open()}}
<div class="form-group">
{{Form::label('Email')}}
{{Form::text('email')}} 
</div>
<br>
<div class="form-group">
{{Form::label('Password')}}
{{Form::password('CWID')}} 
</div>
{{Form::submit("Log in")}}
{{Form::close()}}
@stop

<script type = "text/javascript" language="JavaScript">
	function clickedButton() {
		@foreach($students as $student)
    			
				window.location = '/team13/project/public/studentinfo';
			
  		@endforeach
		window.location = '/team13/project/public/studentinfo';
	}
</script>