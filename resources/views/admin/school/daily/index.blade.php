@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.daily.create', [$school->id, $klass->id]) }}">Create a Daily</a>
        </ul>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th>Daily</th>
        </tr>
        </thead>
        <tbody>
        {{dump($dailies)}}
        @foreach($dailies as $daily)
            <tr>
                <td>{{$daily->subject}}</td>
                <td>
                    {{--                    {{dump($classes)}}--}}
                    <a href="{{route('admin.schoolList.classList.daily.show', [$school->id, $klass->id, $daily->id])}}" class="btn btn-primary">Show</a>
                    <a href="{{route('admin.schoolList.classList.daily.edit', [$school->id, $klass->id, $daily->id])}}" class="btn btn-primary">Edit</a>

                    {{ Form::open(['route'=>['admin.schoolList.classList.daily.destroy',$school->id, $klass->id, $daily->id],'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!--    --><?php //echo $classList->render(); ?>
    @endsection