@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('teacher.daily.index') }}">View All Daily</a></li>
            <li><a href="{{ route('teacher.daily.create') }}">Create a Daily</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}

    {{ Form::model($daily, array('route' => array('teacher.daily.update', $daily->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('subject', 'Subject') }}
        {{ Form::text('subject', Input::old('subject'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the Daily!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection
