@extends('layouts.app')

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <style>
        .view {
            /*background: url("scool.png")no-repeat center center  0.5;*/
            background: linear-gradient(#f4fffc, #1b31ff);
            background-size: 100% 100% !important;
            height: 100vh;

        }
    </style>
    <select id="test">
        <option>12</option>
        <option>42</option>
        <option>10</option>
        <option>11</option>

    </select>

    <div class="view hm-black-strong">
        <div class="logo">
        <a> <img src="Logo.png">
            </a>

            </div>
    </div>
<script> $(document).ready(function(){

        $('select').select2({

            placeholder: "Школы",
            allowClear: true
        });
    })</script>
@stop