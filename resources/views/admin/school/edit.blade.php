@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.school.index') }}">View All school</a></li>
            <li><a href="{{ route('admin.school.create') }}">Create a school</a>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}

    {{ Form::model($subject, array('route' => array('admin.school.update', $subject->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('number', 'Number') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the School!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection