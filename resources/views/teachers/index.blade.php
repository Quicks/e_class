@extends('app')
@section('content')

    <table class="table">
        <thead>
        <tr>
            {{--<th>#</th>--}}
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    {{--<th scope="row">1</th>--}}
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->email}}</td>
                    <td>{{$teacher->class_name}}</td>
                    <td>
                        <a href="{{route('teachers.show', [$teacher->id])}}" class="btn btn-primary">Show</a>
                        <a href="{{route('teachers.edit', [$teacher->id])}}" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-primary">Destroy</a>

                        <a class="blue-text"><i class="fa fa-user"></i></a>
                        <a class="teal-text"><i class="fa fa-pencil"></i></a>
                        <a class="red-text"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            @endforeach
        {{--<tr>--}}
            {{--<th scope="row">1</th>--}}
            {{--<td>Abby</td>--}}
            {{--<td>Barrett</td>--}}
            {{--<td>@abbeme</td>--}}
            {{--<td>--}}
                {{--<a class="blue-text"><i class="fa fa-user"></i></a>--}}
                {{--<a class="teal-text"><i class="fa fa-pencil"></i></a>--}}
                {{--<a class="red-text"><i class="fa fa-times"></i></a>--}}
            {{--</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<th scope="row">2</th>--}}
            {{--<td>Danny</td>--}}
            {{--<td>Collins</td>--}}
            {{--<td>@dennis</td>--}}
            {{--<td>--}}
                {{--<a class="blue-text"><i class="fa fa-user"></i></a>--}}
                {{--<a class="teal-text"><i class="fa fa-pencil"></i></a>--}}
                {{--<a class="red-text"><i class="fa fa-times"></i></a>--}}
            {{--</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<th scope="row">3</th>--}}
            {{--<td>Clara</td>--}}
            {{--<td>Ericson</td>--}}
            {{--<td>@claris</td>--}}
            {{--<td>--}}
                {{--<a class="blue-text"><i class="fa fa-user"></i></a>--}}
                {{--<a class="teal-text"><i class="fa fa-pencil"></i></a>--}}
                {{--<a class="red-text"><i class="fa fa-times"></i></a>--}}
            {{--</td>--}}
        {{--</tr>--}}

        </tbody>
    </table>

@endsection