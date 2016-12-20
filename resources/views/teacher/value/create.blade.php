@extends('layouts.app')
@section('content')
    {{ Html::ul($errors->all()) }}


    {{ Form::open(['route'=>['teacher.daily.user.value.store', $daily->id, $student->id]]) }}
    {{Form::hidden('daily_id', $daily->id)}}
    {{Form::hidden('id_student', $student->id)}}
    <div class="form-group">
        {{ Form::label('value', 'Value') }}
        {{ Form::text('value', Input::old('value'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::text('date', Input::old('date'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the Daily!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
