@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.school.create') }}">Create a School</a>
        </ul>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th>Subject</th>
        </tr>
        </thead>
        <tbody>
        @foreach($schools as $school)
            <tr>
                <td>{{$school->name}}</td>
                <td>{{$school->number}}</td>
                <td>
                    <a href="{{route('admin.school.show', [$school->id])}}" class="btn btn-primary">Show</a>
                    <a href="{{route('admin.school.edit', [$school->id])}}" class="btn btn-primary">Edit</a>

                    {{ Form::open(['route'=>['admin.school.destroy', $school->id],'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <?php echo $schools->render(); ?>
@endsection