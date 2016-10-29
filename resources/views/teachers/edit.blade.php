@extends('app')
@section('content')

    <!--Form without header-->
    {{--<form action="{{route('teachers.update', [$teacher->id])}}" method="POST">--}}
        {{--{{csrf_field()}}--}}
        {{--<div class="form-group">--}}
            {{--<label for="Email">Email</label>--}}
            {{--<input type="email"  name ="email" class="form-control" id="Email" placeholder="Email">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="name-teacher">Name</label>--}}
            {{--<input type="text" class="form-control" id="name-teacher" name="name" placeholder="Name">--}}
        {{--</div>--}}
        {{--<button type="submit" class="btn btn-default">Submit</button>--}}
    {{--</form>--}}
    <!--/Form without header-->

    {{ Html::ul($errors->all()) }}

    {{ Form::model($teacher, array('route' => array('teachers.update', $teacher->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('class_name', 'Class_name') }}
        {{ Form::text('class_name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Teacher!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection
