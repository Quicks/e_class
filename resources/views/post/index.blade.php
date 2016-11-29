@extends('layouts.app')

@section('content')



    <div class="view hm-black-strong">
        <div class="logo">
            <a> <img src="Logo.png">
            </a>
        </div>
    </div>
    <form action="">
        <select name="school_id">
            @foreach($schools as $school)
            <option value="{{$school->id}}">{{$school->name}}</option>
            @endforeach
        </select>
    </form>
