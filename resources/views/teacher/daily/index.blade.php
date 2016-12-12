@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="#">Create a Daily</a>
        </ul>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th>Daily</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dailies as $daily)
            <tr>
                <td>{{$daily->subject}}</td>
                <td>
                    <a href="{{route('teacher.daily.show', [$daily])}}" class="btn btn-primary">Show</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!--    --><?php //echo $classList->render(); ?>
    @endsection