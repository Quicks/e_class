@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.daily.index',[$school->id, $klass->id]) }}">View All Daily</a></li>
            <li><a href="{{ route('admin.schoolList.classList.daily.create',[$school->id, $klass->id]) }}">Create a Daily</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <p>
        <td>{{$daily->subject}}</td>
        </p>
    </div>
@endsection