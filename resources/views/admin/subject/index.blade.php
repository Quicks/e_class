@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.subject.create') }}">Create a Subject</a>
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
                {{--<th scope="row">1</th>--}}
                <td>{{$subject->title}}</td>
                <td>
                    <a href="{{route('admin.subject.show', [$subject->id])}}" class="btn btn-primary">Show</a>
                    <a href="{{route('admin.subject.edit', [$subject->id])}}" class="btn btn-primary">Edit</a>

                    {{ Form::open(array('url' => 'admin/subject/' . $subject->id, 'class' => 'pull-right')) }}
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