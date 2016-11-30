@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.daily.index', [$school->id, $klass->id]) }}">View Daily</a></li>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}


    {{ Form::open(['route'=>['admin.schoolList.classList.daily.store', $school->id, $klass->id]]) }}
    {{Form::hidden('class_id', $klass->class_id)}}
    <div class="form-group">
        {{ Form::label('subject', 'Subject') }}
        {{ Form::text('subject', Input::old('subject'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the Daily!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
