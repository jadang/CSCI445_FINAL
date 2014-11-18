@extends('master')

@section('header')
<h1>Field Session Login</h1>
@stop

@section('content')
{{Form:open()}}
{{Form::label('Email')}}
{{Form::text('email')}} 
{{Form::label('Password')}}
{{Form::text('password')}} 
{{Form::submit('Log In')}}
{{Form:close()}}
@stop