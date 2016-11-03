@extends('layouts.app')

@section('content')
    <link href='css/jquery-ui.css' rel="stylesheet" xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/style.css') }}" />



    <style>

        #dialog-link span {
            margin: 0 5px 0 0;
            position: absolute;
            left: .2em;
            top: 50%;
            margin-top: -8px;
        }

        #icons li {
            margin: 2px;
            position: relative;
            padding: 4px 0;
            cursor: pointer;
            float: left;
            list-style: none;
        }

        #icons span {
            float: left;
            margin: 0 4px;
        }

        .fakewindowcontain  {
            position: absolute;
        }

        select {
            width: 200px;
        }

        .btn {
            float: right;
        }
      .main-conteiner{

          width: 100%;
          margin-top: 5px;
          margin-bottom: 20px;
          clear: both;
          background-size: cover;
          height: 110vh;
      }
        .left-box{
            float: left!important;
            height: auto!important;
            width: 21.6% !important;
            clear: both;
            display: inline-block;
            vertical-align: bottom;

        }
        .right-box{
            float: right!important;
            height: auto!important;
            width: 78%;
        }
.card{
    /*float: left!important;*/
    width: 100%;
    height: 400px;
    padding-top: 5px;
}
        .indigo{
            background-color: #4285F4!important;
        }
        .fa .fa-envelope{
            color: #1e2993;

        }
         .nav-link{
             color: snow;
         }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
<body>
<div class="main-conteiner">
<div class="left-box">
    <!--Card-->
    <div class="card">

        <!--Card image-->
        {{--<img class="img-fluid" src="default.jpg" alt="Card image cap" style="width: 150px; height: 150px; border-radius: 50%; margin-left: 25%;">--}}
        <img class="img-fluid" src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-left: 25%";>
        <!--/.Card image-->

        <!--Card content-->
        <div class="card-block">
            <!--Title-->
            <h4 class="card-title">{{ Auth::user()->name }}</h4>
        {{--{{$user->name}}--}}
            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{url('/profile')}}" class="btn btn-primary" style="margin-right: 30%;">Мої дані</a>
            <form enctype="multipart/form-data" action="/teacher" method="post">
                <label>Update profile image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
        <!--/.Card content-->

    </div>
    <!--/.Card-->

    <div id="datepicker"></div>
</div>

<div class="right-box">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-3 indigo" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-user"></i> Організаційні питання</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-heart"></i> Розклад</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-envelope"></i> Журнал</a>
        </li>
    </ul>

    <!-- Tab panels -->
    <div class="tab-content">

        <!--Panel 1-->
        <div class="tab-pane fade in active" id="panel5" role="tabpanel">
            <br>

            <table>
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>


        </div>
        <!--/.Panel 1-->

        <!--Panel 2-->
        <div class="tab-pane fade" id="panel6" role="tabpanel">
            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

        </div>
        <!--/.Panel 2-->

        <!--Panel 3-->
        <div class="tab-pane fade" id="panel7" role="tabpanel">
            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

        </div>
        <!--/.Panel 3-->

    </div>

</div>
</div>
    <script src="js/jquery.js"></script>

    <script src="js/jquery-ui.js"></script>
    <!-- <script>
                jQuery(function($){
    $.datepicker.regional['ru'] = {
    monthNames: ['Січень', 'Лютий', 'Березень', 'Квітень',
    'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень',
    'Жовтень', 'Листопад', 'Грудень'],
    dayNamesMin: ['Нд','Пн','Вт','Ср','Чт','Пт','Сб'],
    firstDay: 1,
    };
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    });
    </script> -->
    <script>
        $("#datepicker").datepicker({
            inline: true
        });

    </script>


</body>
@stop