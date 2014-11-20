@extends('master')

@section('header')
  <a href="{{URL::to('adminpage')}}">Back to Students</a>
  <h2>
    {{$student->FirstName}} {{$student->LastName}}
  </h2>
  <h4> Prefers: {{$student->ProjectOrTeam}} </h4>
@stop

@section('content')
  <p> Email: {{$student->username}} </p>
  <p> Major: {{$student->Major}} </p>
  <p> Minor: {{$student->Minor}} </p>
  <h3>Project Choices</h3>
  <p> Choice 1: {{$student->FirstChoice}} </p>
  <p> Choice 2: {{$student->SecondChoice}} </p>
  <p> Choice 3: {{$student->ThirdChoice}} </p>
  <p> Choice 4: {{$student->FourthChoice}} </p>
  <h3>Other Information</h3>
  <p> {{$student->OtherInformation}} </p>
  <h3>Don't Want to Work With</h3>
  <p> {{$student->PreferredStudents}} </p>
  <h3>Want to Work With</h3>
  <p> {{$student->UnPreferredStudents}} </p>
@stop