@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                Some User!
                User Email - {{ $user -> email }};
                <br />
                User Name - {{ $user -> name }};
                <br />
                User Type - {{ $user -> type }};
            </div>
        </div>
    </div>
@endsection
