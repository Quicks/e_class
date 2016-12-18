@extends('layouts.app')
@section('content')
    {{ Html::ul($errors->all()) }}

    {{ Form::model($value, array('route' => array('teacher.daily.value.update', $daily->id, $value->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('value', 'Value') }}
        {{ Form::text('value', Input::old('value'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::text('date', Input::old('value'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the Value!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection
