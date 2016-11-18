@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.subject.index') }}">View All Subjects</a></li>
            <li><a href="{{ route('admin.subject.create') }}">Create a Subject</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}

    {{ Form::open(['url'=>'admin/subject']) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('class_name'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the Subject!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
