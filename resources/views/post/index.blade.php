@extends('layouts.app')

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <style>
        .view {
            background: linear-gradient(#f4fffc, #1b31ff);
            background-size: 100% 100% !important;
        }



    </style>
    <div class="view hm-black-strong">
    {{--<div class="container">--}}
    <div class="select-test">
        <select id="test">
            <option></option>
            <option value="1">12</option>
            <option value="2">42</option>
            <option value="3">10</option>
            <option value="4">11</option>

        </select>
    </div>



            <div class="logo">
                <a> <img src="Logo.png">
                </a>
            </div>
        </div>
        {{--</div>--}}
        {{--<form action="">--}}
            {{--<select name="school_id">--}}
                {{--@foreach($schools as $school)--}}
                    {{--<option value="{{$school->id}}">{{$school->name}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
        {{--</form>--}}
    {{--</div>--}}
    <div class="view hm-black-strong">
        <div class="logo">
            <a> <img src="Logo.png">
            </a>
        </div>
        <form action="">
            {{--<select name="school_id">--}}
                {{--@foreach($schools as $school)--}}
                    {{--<option value="{{$school->id}}">{{$school->name}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
        </form>
    </div>
<script> $(document).ready(function(){

        $('select').select2({

            placeholder: "Школы",
            allowClear: true
        }).on('change',function (e) {
           var stabData = [
               { id: 12, title: '7-a' },
               { id: 18, title: '10-d' },
               { id: 25, title: '9-c' }
           ]
            renderClassesSelect(stabData)
            var schoolId = e.target.value
//            $.ajax({
//                url: 'classes_by_school',
//                data: {school_Id:schoolId},
//                dataType: 'Json',
//                success: function(data){
//                    renderClassesSelect(data)
//                }
//            })
        })

        function renderClassesSelect(data){
            console.log(data)
             var select_of_classes = $('<select></select>')
            data.forEach(function(item, i, data) {
              var option = $('<option></option>')
                option.val(item.id);
                option.text(item.title);
                select_of_classes.append(option);
            });

           $('.select-test').append(select_of_classes);
            select_of_classes.select2();
        }
    })</script>
@stop
