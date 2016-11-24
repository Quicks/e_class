@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.index',[$school->id]) }}">View All Class</a></li>
            <li><a href="{{ route('admin.schoolList.classList.create',[$school->id]) }}">Create a Class</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <p>
{{--            {{dump($class_name)}}--}}
        <td>{{$class_name->class_name}}</td>
        <td>{{$class_name->number}}</td>
{{--        <td>{{$class_name->school_id}}</td>--}}
        </p>
    </div>
@endsection