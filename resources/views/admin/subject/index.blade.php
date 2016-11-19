@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.subjects.create') }}">Create a Subject</a>
        </ul>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th>Subject</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
            <tr>
                <td>{{$subject->title}}</td>
                <td>
                    <a href="{{route('admin.subjects.show', [$subject->id])}}" class="btn btn-primary">Show</a>
                    <a href="{{route('admin.subjects.edit', [$subject->id])}}" class="btn btn-primary">Edit</a>

                    {{ Form::open(['route'=>['admin.subjects.destroy', $subject->id],'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <?php echo $subjects->render(); ?>
@endsection