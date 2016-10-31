@extends('app')
@section('content')
    <h2>Class list</h2>
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('sc.create')}}">Create a Class</a>
        </ul>
    </nav>
    <table class="table">
        <thead>
        <tr>
            {{--<th>#</th>--}}
            <th>Id</th>
            <th>Name</th>
            <th>School</th>
            <th>Teacher</th>
        </tr>
        </thead>
        <tbody>
        @foreach($StudentsClass as $StudentsCl)
            <tr>
                {{--<th scope="row">1</th>--}}
                <td>{{$StudentsCl->id}}</td>
                <td>{{$StudentsCl->name}}</td>
                <td>{{$StudentsCl->school}}</td>
                <td>{{$StudentsCl->teacher}}</td>
               {{-- <td>
                    <a href="{{route('$StudentsClass.show', [$StudentsClass->id])}}" class="btn btn-primary">Show</a>
                    <a href="{{route('$StudentsClass.edit', [$StudentsClass->id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('$StudentsClass.destroy', [$StudentsClass->id])}}" class="btn btn-primary">Destroy</a>

                    <a class="blue-text"><i class="fa fa-user"></i></a>
                    <a class="teal-text"><i class="fa fa-pencil"></i></a>
                    <a class="red-text"><i class="fa fa-times"></i></a>
                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection