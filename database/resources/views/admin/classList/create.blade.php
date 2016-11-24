@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.classList.index') }}">View All Subjects</a></li>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}


    {{ Form::open(['route'=>['admin.classList.store']]) }}

    <div class="form-group">
        {{ Form::label('class_name', 'Class_name') }}
        {{ Form::text('class_name', Input::old('class_name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('number', 'Number') }}
        {{ Form::text('number', Input::old('number'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('school', 'School') }}
        {{ Form::text('school', Input::old('school'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the Klass!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
