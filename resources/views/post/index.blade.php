@extends('layouts.app')

@section('content')



    <div class="view hm-black-strong">
        <div class="logo">
            <a> <img src="Logo.png">
            </a>
Test test!!!
            {{dump($schools)}}
        </div>
    </div>
{{--    {{dd($schools)}}--}}
    <form action="">
        <select name="school_id">
            @foreach($schools as $school)
            <option value="{{$school->id}}">{{$school->name}}</option>
            @endforeach
        </select>
    </form>
{{--    {{ Form::select('schools', $schools, null, array('class' => 'form-control')) }}--}}
@endsection
