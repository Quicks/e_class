@extends('layouts.app')
@section('content')
    {{ Html::ul($errors->all()) }}


    {{ Form::open(['route'=>['teacher.daily.user.value.store', $daily->id, $user->id, $id_student, $daily_id]]) }}
    {{Form::hidden('daily_id', $daily_id)}}
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
