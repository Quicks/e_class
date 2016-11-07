@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
         <ul class="nav navbar-nav">
            <li><a href="{{ route('teachers.index') }}">View All Teachers</a></li>
            <li><a href="{{ route('teachers.create') }}">Create a Teacher</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <h2>{{ $teacher->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $teacher->email }}<br>
            <strong>Class_name:</strong> {{ $teacher->class_name }}
        </p>
    </div>
    </div>
@endsection
