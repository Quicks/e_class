@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.index') }}">View All Schools</a></li>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}


    {{ Form::open(['route'=>['admin.schoolList.store']]) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('number', 'Number') }}
        {{ Form::text('number', Input::old('number'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the School!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
