@extends('master')
<link rel="stylesheet" href="{{asset('bootstrap-3.0.0.min.css')}}">
@section('header')
<h1>Students</h1>
@stop

@section('content')
@foreach($students as $student)
	<div class="student">
      <a href="{{URL::to('students/'.$student->id)}}">
        <strong> {{$student->First}} {{$student->Last}} </strong>
      </a>
    </div>
@endforeach
<br>
@stop

