@extends('app')
@section('content')
  <h1>Create new Class</h1>

  {!! Form::open(['route' => 'sc.store']) !!}
  @include('StudentsClass._form')

  {!! Form::close() !!}
@endsection