@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.classList.index') }}">View All Class</a></li>
            <li><a href="{{ route('admin.classList.create') }}">Create a Class</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}

    {{ Form::model($class_name, array('route' => array('admin.classList.update', $class_name->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('class_name', 'Class_name') }}
        {{ Form::text('class_name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('number', 'Number') }}
        {{ Form::text('class_name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('school', 'School') }}
        {{ Form::text('school', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Class!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection