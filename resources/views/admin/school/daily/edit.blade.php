@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.daily.index',[$school->id, $klass->id]) }}">View All Daily</a></li>
            <li><a href="{{ route('admin.schoolList.classList.daily.create',[$school->id, $klass->id]) }}">Create a Daily</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}

    {{ Form::model($daily, array('route' => array('admin.schoolList.classList.daily.update', $school->id, $klass->id, $daily->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('subject', 'Subject') }}
        {{ Form::text('subject', Input::old('subject'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the Daily!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection
