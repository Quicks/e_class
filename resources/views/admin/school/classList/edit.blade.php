@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.index', [$school->id]) }}">View All Class</a></li>
            <li><a href="{{ route('admin.schoolList.classList.create', [$school->id]) }}">Create a Class</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}

    {{ Form::model($class_name, array('route' => array('admin.schoolList.classList.update', $school->id, $class_name->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('class_name', 'Class_name') }}
        {{ Form::text('class_name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('number', 'Number') }}
        {{ Form::number('number', null, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the Class!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection