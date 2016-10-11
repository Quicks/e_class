<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/style.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style rel="stylesheet">
        .nav-item{
            float: right !important;
            margin-left: 20px !important;
            margin-top: 12px !important;
        }
        .navbar-brand{
            margin-right: 100px;
        }
    </style>

</head>
<body>


<!--Navbar-->
<nav class="navbar navbar-dark bg-primary">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>

    <div class="container">

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <!--Navbar Brand-->
            <a class="navbar-brand"> <img src="Logo2.png"> </a>
            <!--Links-->
            <ul class="nav navbar-nav" id="menu">

                <li class="nav-item">
                    <a class="nav-link"  href="#about-us">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Вхід</a>
                </li>

            </ul>

        </div>
        <!--/.Collapse content-->

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
</body>
</html>