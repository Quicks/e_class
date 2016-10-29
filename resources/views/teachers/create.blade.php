@extends('app')
@section('content')

    {{ Html::ul($errors->all()) }}

    {{ Form::open(array('url' => 'teachers')) }}

    <div class="form-group">
    {{ Form::label('class_name', 'Class_name') }}
    {{ Form::text('class_name', Input::old('class_name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Teacher!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection



{{--<div class="form-group">--}}
    {{--{{ Form::label('id', 'Id') }}--}}
    {{--{{ Form::integer('id', Input::old('id'), array('class' => 'form-control')) }}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{{ Form::label('class_name', 'Class_name') }}--}}
    {{--{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
    {{--{{ Form::label('name', 'Name') }}--}}
    {{--{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
    {{--{{ Form::label('email', 'Email') }}--}}
    {{--{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}--}}
{{--</div>--}}