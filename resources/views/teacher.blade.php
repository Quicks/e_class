@extends('app')

@section('content')
    <link href='css/jquery-ui.css' rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/style.css') }}" />

    <style>

        body {

            font-family: "Trebuchet MS", sans-serif;
            margin: 50px;
            height: 100vh;
        }

        .demoHeaders {
            margin-top: 2em;
        }

        #dialog-link {
            padding: .4em 1em .4em 20px;
            text-decoration: none;
            position: relative;
        }

        #dialog-link span.ui-icon {
            margin: 0 5px 0 0;
            position: absolute;
            left: .2em;
            top: 50%;
            margin-top: -8px;
        }

        #icons {
            margin: 0;
            padding: 0;
        }

        #icons li {
            margin: 2px;
            position: relative;
            padding: 4px 0;
            cursor: pointer;
            float: left;
            list-style: none;
        }

        #icons span.ui-icon {
            float: left;
            margin: 0 4px;
        }

        .fakewindowcontain .ui-widget-overlay {
            position: absolute;
        }

        select {
            width: 200px;
        }

        #datepicker {

            float: left;
        }

        .btn {
            float: right;
        }
    </style>
<body>
    <div id="datepicker"></div>


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

    <form class="form" action="/profile/settings" method="post" data-submit="o" enctype="multipart/form-data">
        <h2>Изображение профиля</h2>
        <div class="grid grid--gutters form__group">
            <div class="grid__cell grid__cell--1-4">
                <div class="crop-pic">
                    <img alt="Юлия Мусиенко" src="/upload/images/sources/20160517_47ba1f7b.jpg" width="100"
                         height="100">
                </div>
                <p><a href="/profile/settings/delimage">Удалить</a></p>
            </div>
            <div class="grid__cell">
                <div class="form__group">
                    <div class="form__group-fields">
<span class="file">
<input class="file__input" type="file" name="image" id="image" required="">
<label class="file__label button button--transparent button--wide" for="image">
<span>Вставить фото</span>
</label>
</span>
                    </div>
                </div>
                <input type="hidden" name="action" value="image">
                <div class="form__group">
                    <button class="button button--wide" type="submit" data-submit-text="Сохраняю…">Сохранить</button>
                </div>
            </div>
        </div>
    </form>
</body>
@stop