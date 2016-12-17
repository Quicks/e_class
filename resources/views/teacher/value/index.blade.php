@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>User</th>
            <th>Value</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($value as $value)
                <td>{{dd($value->value)}}</td>
            @endforeach
            {{--<td>{{$value->daily->classList->user}}</td>--}}
            {{--<td>{{$value->value}}</td>--}}
            {{--<td>{{$value->date}}</td>--}}
        </tr>
        {{--@foreach($users as $user)--}}
            {{--<tr>--}}
                {{--<td>{{$user->email}}</td>--}}
        {{--@endforeach--}}
        {{--@foreach($values as $value)--}}
            {{--<tr>--}}
                {{--<td>{{$value->value}}</td>--}}
                {{--<td>{{$value->date}}</td>--}}
                {{--<td>{{$value->id_student}}</td>--}}
                {{--<td>--}}
                    {{--<a href="{{route('admin.schoolList.classList.daily.value.show', [$school->id, $klass->id, $daily->id, $value->id])}}" class="btn btn-primary">Show</a>--}}
                    {{--<a href="{{route('admin.schoolList.classList.daily.value.edit', [$school->id, $klass->id, $daily->id, $value->id])}}" class="btn btn-primary">Edit</a>--}}

                    {{--{{ Form::open(['route'=>['admin.schoolList.classList.daily.value.destroy', $school->id, $klass->id, $daily->id, $value->id],'class' => 'pull-right']) }}--}}
                    {{--{{ Form::hidden('_method', 'DELETE') }}--}}
                    {{--{{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}--}}
                    {{--{{ Form::close() }}--}}

                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        </tbody>
    </table>
    <!--    --><?php //echo $classList->render(); ?>
    @endsection
