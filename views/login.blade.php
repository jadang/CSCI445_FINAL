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
{{Form::password('password')}} 
</div>
<input type="button" value="Login" onClick="clickedButton()"/>
{{Form::close()}}

echo {{$students}}
@stop

<script type = "text/javascript" language="JavaScript">
	function clickedButton() {
		window.location = '/team13/project/public/login';
	}
</script>