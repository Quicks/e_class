@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.index') }}">View All school</a></li>
            <li><a href="{{ route('admin.schoolList.create') }}">Create a school</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <p>
            <strong>School name:</strong> {{ $school->name }}<br>
            <strong>School number:</strong> {{ $school->number }}<br>
        </p>
    </div>
@endsection