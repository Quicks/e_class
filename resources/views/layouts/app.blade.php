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
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .navbar-nav>li>a{
            color: cornsilk!important;
        }

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top navbar-dark bg-primary">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="Logo2.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Вхід</a></li>
                        <li id="menu"><a   href="#about-us">Про нас</a></li>
                    @else

                        <li>
                            <a href="{{ url('/teacher') }}" class="nav-item"  role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                                <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; left: 10px; top: 10px;  border-radius: 50%;">
                                {{ Auth::user()->name }}
                            </a>
                        </li>

                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out "></i>Вийти</a></li>
                        <li id="menu"><a   href="#about-us">Про нас</a></li>

                        </li>

                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 offset-md-1" id="about-us">
                    <h5 class="title">Про наш проект</h5>
                    <p>Даний проект розроблений спеціалістами для покращення якості шкільної освіти. </p>

                    <p>Електронний клас покращує взаємодію між вчителями, учнями та батьками.</p>
                </div>
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
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-2">
                    <p class="column-title white-text">Директор ІТ Академії</p>

                    <ul>
                        <li><a href="#">Роман Мельник</a></li>

                    </ul>
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
    <!-- JavaScripts -->

</body>
</html>
