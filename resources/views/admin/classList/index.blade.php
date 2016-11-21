@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.classLists.create') }}">Create a Class</a>
        </ul>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th>ClassList</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classList as $classes)
            <tr>
                <td>{{$classes->class_name}}</td>
                <td>{{$classes->number}}</td>
                <td>{{$classes->school}}</td>
                <td>
                    <a href="{{route('admin.classLists.show', [$classes->id])}}" class="btn btn-primary">Show</a>
                    <a href="{{route('admin.classLists.edit', [$classes->id])}}" class="btn btn-primary">Edit</a>

                    {{ Form::open(['route'=>['admin.classLists.destroy', $classes->id],'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <?php echo $classList->render(); ?>
@endsection