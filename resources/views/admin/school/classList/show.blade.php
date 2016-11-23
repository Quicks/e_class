@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.index') }}">View All Class</a></li>
            <li><a href="{{ route('admin.schoolList.classList.create') }}">Create a Class</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <p>
        <td>{{$class_name->class_name}}</td>
        <td>{{$class_name->number}}</td>
        <td>{{$class_name->school}}</td>
        </p>
    </div>
@endsection