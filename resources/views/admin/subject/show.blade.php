@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.subjects.index') }}">View All Subjects</a></li>
            <li><a href="{{ route('admin.subjects.create') }}">Create a Subject</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <p>
            <strong>Subject:</strong> {{ $subject->title }}<br>
        </p>
    </div>
@endsection