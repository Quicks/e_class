<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ URL::asset('mdb/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('mdb/css/mdb.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('mdb/css/style.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      
    </head>
    <body>
        @extends('layouts.layouts')

        @section('header')
            @include('header.header')
        @endsection

        @section('content')
            @include('content.content')
        @endsection

        @section('footer')
            @include('footer.footer')
        @endsection
        <script type="text/javascript" src="{{ URL::asset('mdb/js/jquery-2.2.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('mdb/js/tether.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('mdb/js/bootstrap.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('mdb/js/mdb.min.js') }}" ></script>
    </body>
</html>
