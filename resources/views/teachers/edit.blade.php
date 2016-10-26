@extends('app')
@section('content')

    <!--Form without header-->
    <form action="{{route('teachers.update', [$teacher->id])}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="name-teacher">Name</label>
            <input type="text" class="form-control" id="name-teacher" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <!--/Form without header-->

@endsection
