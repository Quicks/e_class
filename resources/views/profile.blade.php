@extends('layouts.app')

@section('content')
    <style>

        body {

            font-family: "Trebuchet MS", sans-serif;
            /*margin: 50px;*/
            /*height: 100vh;*/
        }
        /*.main-conteiner{*/

            /*width: 100%;*/
            /*margin-top: 5px;*/
            /*margin-bottom: 20px;*/
            /*clear: both;*/
            /*background-size: cover;*/
            /*height: 110vh;*/
            /*margin-left: 50%;*/
        /*}*/
        .card{
            /*float: left!important;*/
            width: 30%;
            height: auto;
            margin: 20px;
            margin-left: 35%;
            padding-top: 10px;
        }

        </style>
    <body>
    <div class="main-conteiner">
        <div class="card">

            <!--Card image-->
            <img class="img-fluid" src="default.jpg"   alt="Card image cap" style="width: 200px; height: 200px; border-radius: 50%; margin-left: 25%;">
        {{--<img class="img-fluid" src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px";>--}}
        <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Title-->
                <div class="md-form">
                    <input value="ПІБ" type="text" id="form6" class="form-control">

                    <label class="active" for="form6"></label>

                </div>
                <div class="md-form">
                    <input value="телефон" type="text" id="form6" class="form-control">
                    <label class="active" for="form6"></label>
                </div>
                <div class="md-form">
                    <input value="домашня адреса" type="text" id="form6" class="form-control">
                    <label class="active" for="form6"></label>
                </div>
                <div class="md-form">
                    <input value="дата народження" type="text" id="form6" class="form-control">
                    <label class="active" for="form6">l</label>
                </div>
                <a href="{{url('/profile')}}" class="btn btn-primary">Завантажити фото</a>
                <a href="{{url('/profile')}}" class="btn btn-primary">Зберегти</a>
            </div>
            <!--/.Card content-->

        </div>
</div>
    </body>
@stop