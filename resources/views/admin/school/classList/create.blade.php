@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.index', [$school_id]) }}">View Class</a></li>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}


    {{ Form::open(['route'=>['admin.schoolList.classList.store',$school_id]]) }}
        {{Form::hidden('school_id',$school_id)}}
    <div class="form-group">
        {{ Form::label('class_name', 'Class_name') }}
        {{ Form::text('class_name', Input::old('class_name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('number', 'Number') }}
        {{ Form::number('number', Input::old('number'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the Class!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
