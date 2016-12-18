@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <table>
            <thead>
            <tr>
                <th>Value</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$value->value}}</td>
                    <td>{{$value->date}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('teacher.daily.user.value.show', [$daily, $user, $value])}}" class="btn btn-primary">Show</a>
        <a href="{{route('teacher.daily.user.value.edit', [$daily, $user, $value])}}" class="btn btn-primary">Edit</a>
    </div>
@endsection