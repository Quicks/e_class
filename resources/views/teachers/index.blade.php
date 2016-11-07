@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('teachers.create')}}">Create a Teacher</a>
        </ul>
    </nav>
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

                        {{ Form::open(array('url' => 'teachers/' . $teacher->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
                        {{ Form::close() }}

                        <a class="blue-text"><i class="fa fa-user"></i></a>
                        <a class="teal-text"><i class="fa fa-pencil"></i></a>
                        <a class="red-text"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <?php echo $teachers->render(); ?>
    {{--<div class="pagination"> {{ $teachers->links() }} </div>--}}
@endsection