<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/style.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('js/css/select2.min.css') }}" />

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <style>

        .fa-btn {
            margin-right: 6px;
        }
        .navbar-nav>li>a{
            color: cornsilk!important;
        }
        * {
            margin: 0;
            padding: 0;
        }
        html,
        body {
            height: 100%;
            width: 100%;
            font-family: 'Lato';
            position: absolute;
        }
        .wrapper {
            position: relative;
            min-height: 100%;
        }
        /*.content {*/
            /*padding-bottom: 80px;*/
        /*}*/
        .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 80px;
        }
        img{
            /*-webkit-filter: grayscale(1);*/
            cursor: pointer;
            transition: all .5s ease;
            max-width: 100%;
            height: auto;
        }

        img:hover{
            -webkit-filter: grayscale(0);
            transform: scale(1.2,1.2);
        }

        .content{
            width: 100%;
            height: 100%;
            position: inherit;
            top: 0;
            left: 0;
            margin: 0;
            overflow: auto;
            box-sizing: inherit;
        }




        }
    </style>
</head>
<body id="app-layout">
<div class="wrapper">
<nav class="navbar navbar-dark bg-primary">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>

    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="Logo2.png">
        </a>
        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">

            <!--Navbar Brand-->

            <!--Links-->
            <ul class="navbar-nav navbar-right active">

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Вхід</a></li>
                    <li class="nav-item" id="menu"><a  class="nav-link" href="#about-us">Про нас</a></li>
                @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/teacher') }}" class="nav-item"  role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                            <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; left: 10px; top: 0px;  border-radius: 50%;">
                            {{ Auth::user()->name }}
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out "></i>Вийти</a></li>
                    <li class="nav-item" id="menu"><a class="nav-link"  href="#about-us">Про нас</a></li>



                @endif
            </ul>
            <!--Search form-->

        </div>
        <!--/.Collapse content-->

    </div>

</nav>


    <div class="content">
    @yield('content')
    </div>
    <div class="footer " id="about-us">
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                {{--<div class="col-md-3 offset-md-1" id="about-us">--}}
                    {{--<h5 class="title">Про наш проект</h5>--}}
                    {{--<p>Даний проект розроблений спеціалістами для покращення якості шкільної освіти. </p>--}}

                    {{--<p>Електронний клас покращує взаємодію між вчителями, учнями та батьками.</p>--}}
                {{--</div>--}}
                <!--Second column-->
                <div class="col-md-2 col-md-offset-1">
                    <p class="column-title white-text">Над проектом працювали</p>

                    <ul>
                        <li><a href="#">Юлія Сторожук</a></li>
                        <li><a href="#">Ігор Грицишин</a></li>
                        <li><a href="#">Юлія Мусієнко</a></li>
                        <li><a href="#">Назар Кушнірук</a></li>

                    </ul>

                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-2">
                    <p class="column-title white-text">Куратори проекту</p>

                    <ul>
                        <li><a href="#">Олександр Панченко</a></li>
                        <li><a href="#">Андрій Нізіньковський</a></li>

                    </ul>
                </div>
                <div class="col-md-2">
                    <p class="column-title white-text">Наші контакти</p>

                    <ul>
                        <li><a href="#">+38(068) 215 14 59</a></li>
                        <li><a href="#">+38(097) 621 77 13</a></li>

                    </ul>
                </div>

                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-2">
                    <p class="column-title white-text">Директор ІТ Академії</p>

                    <ul>
                        <li><a href="#">Роман Мельник</a></li>

                    </ul>
                </div>
                <div class="col-md-2">
                    <p class="column-title white-text"><a href="#">Про наш проект</a></p>


                </div>
            </div>
        </div>


        <div class="footer-copyright">
            <div class="container-fluid">
                © 2016  IT-Academy: <a href="http://ita.in.ua/">ita.in.ua</a>

            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap/jquery-2.2.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap/tether.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}" ></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap/mdb.min.js') }}" ></script>

        <script type="text/javascript" src="{{ URL::asset('js/js/select2.min.js') }}" ></script>
    <script>
        $(document).ready(function(){
            $("#menu").on("click","a", function (event) {
                //отменяем стандартную обработку нажатия по ссылке
                event.preventDefault();

                //забираем идентификатор бока с атрибута href
                var id  = $(this).attr('href'),

                        //узнаем высоту от начала страницы до блока на который ссылается якорь
                        top = $(id).offset().top;

                //анимируем переход на расстояние - top за 1500 мс
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });

    </script>
        </div>
    <!-- JavaScripts -->
</div>
</body>
</html>
