@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('teachers.index') }}">View All Teachers</a></li>
            <li><a href="{{ route('teachers.create') }}">Create a Teacher</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}

    {{ Form::open(array('url' => 'teachers')) }}

    <div class="form-group">
    {{ Form::label('class_name', 'Class_name') }}
    {{ Form::text('class_name', Input::old('class_name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Teacher!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection



