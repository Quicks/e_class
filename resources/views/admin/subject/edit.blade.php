@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.subject.index') }}">View All Subjects</a></li>
            <li><a href="{{ route('admin.subject.create') }}">Create a Subject</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}

    {{ Form::model($subject, array('route' => array('admin.subject.update', $subject->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Subject!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection