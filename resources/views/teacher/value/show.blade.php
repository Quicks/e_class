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
    </div>
    <a href="{{route('teacher.daily.user.value.edit', [$daily, $student, $value])}}" class="btn btn-primary">Edit</a>
    <a href="{{route('teacher.daily.user.value.create', [$daily, $student])}}" class="btn btn-primary">Create</a>
@endsection