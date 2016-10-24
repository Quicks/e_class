@extends('app')
@section('content')

    <!--Form without header-->
    <form action="{{route('teachers.update', [$teacher->id])}}" method="POST">
        <input name="_method" type="hidden" value="PUT">
        {{csrf_field()}}
    <div class="card">
        <div class="card-block">

            <!--Header-->
            <div class="text-xs-center">
                <h3><i class="fa fa-pencil"></i> Subscribe:</h3>
                <hr class="m-t-2 m-b-2">
            </div>

            <!--Body-->
            <p>We'll write rarely, but only the best content.</p>
            <br>

            <!--Body-->
            <div class="md-form">
                <i class="fa fa-user prefix"></i>
                <input type="text" id="form3" class="form-control">
                <label for="form3">Your name</label>
            </div>

            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                <input type="text" name="test" id="form2" class="form-control">
                <label for="form2">Your email</label>
            </div>

            <div class="text-xs-center">
                <button class="btn btn-deep-orange">Send</button>
            </div>

        </div>
    </div>
    </form>
    <!--/Form without header-->

@endsection
