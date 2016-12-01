@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.daily.value.index', [$school->id, $klass->id, $daily->id]) }}">View All Value</a></li>
            <li><a href="{{ route('admin.schoolList.classList.daily.value.create', [$school->id, $klass->id, $daily->id]) }}">Create a Value</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}


    {{ Form::open(['route'=>['admin.schoolList.classList.daily.value.store', $school->id, $klass->id, $daily->id]]) }}
    <div class="form-group">
        {{ Form::label('value', 'Value') }}
        {{ Form::text('value', Input::old('value'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::text('date', Input::old('value'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the Daily!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
