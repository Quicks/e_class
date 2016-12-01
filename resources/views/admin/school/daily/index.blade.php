@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.daily.value.create', [$school->id, $klass->id, $daily->id]) }}">Create a Value</a>
        </ul>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th>Daily</th>
        </tr>
        </thead>
        <tbody>
        @foreach($values as $value)
            <tr>
                <td>{{$value->value}}</td>
                <td>{{$value->date}}</td>
                {{--<td>{{$value->id_student}}</td>--}}
                <td>
                    <a href="{{route('admin.schoolList.classList.daily.value.show', [$school->id, $klass->id, $daily->id])}}" class="btn btn-primary">Show</a>
                    <a href="{{route('admin.schoolList.classList.daily.value.edit', [$school->id, $klass->id, $daily->id])}}" class="btn btn-primary">Edit</a>

                    {{ Form::open(['route'=>['admin.schoolList.classList.daily.value.edit', [$school->id, $klass->id, $daily->id, $value->id]],'class' => 'pull-right']) }}
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