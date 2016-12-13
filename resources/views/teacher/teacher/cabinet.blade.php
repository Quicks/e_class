@extends('layouts.app')

@section('content')
    <link href='css/jquery-ui.css' rel="stylesheet" xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/style.css') }}" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<body>
<div class="main-conteiner">
<div class="left-box">
    <!--Card-->
    <div class="card">

        <!--Card image-->
        {{--<img class="img-fluid" src="default.jpg" alt="Card image cap" style="width: 150px; height: 150px; border-radius: 50%; margin-left: 25%;">--}}
        <img class="img-fluid" src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-left: 25%";>


        <!--/.Card image-->

        <!--Card content-->
        <div class="card-block">
            <!--Title-->
            <h4 class="card-title">{{ Auth::user()->name }}</h4>
        {{--{{$user->name}}--}}
            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{url('/profile')}}" class="btn btn-primary my-data" style="margin-right: 30%;">Мої дані</a>
            {{--<form enctype="multipart/form-data" action="/teacher" method="post">--}}
                {{--<label>Update profile image</label>--}}
                {{--<input type="file" name="avatar">--}}
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                {{--<input type="submit" class="pull-right btn btn-sm btn-primary">--}}
            {{--</form>--}}
        </div>
        <!--/.Card content-->

    </div>
    <!--/.Card-->

   <div id="datepicker">
    <p>
       <input type='text' class='date'></p>
   </div>
</div>

<div class="right-box">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-3 indigo" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-user"></i> Організаційні питання</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-heart"></i> Розклад
                {{Form::select('$subject', $subjects)}}</a>

        </li>
        <li class="nav-item">
            <!-- Single button -->
        </li>
    </ul>
<button><a href="{{route('teacher.daily.index')}}">Journal</a></button>
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
            ggdgdfggdfgdgfdgf
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
jQuery(function($) {

$(".date").datepicker({
onSelect: function(dateText) {
display("Selected date: " + dateText + "; input's current value: " + this.value);
}
}).on("change", function() {
display("Got change event from field");
});

function display(msg) {
$("<p>").html(msg).appendTo(document.body);
    }

    });
</script>
{{--<script>--}}
{{--$( function() {--}}
{{--$( "#datepicker" ).datepicker();--}}
{{--} );--}}
{{--</script>--}}
{{--<script>--}}
    {{--$( function() {--}}
        {{--$( "#datepicker" ).datepicker({--}}
            {{--altField: "#alternate",--}}
            {{--altFormat: "MM, d DD, yy"--}}
        {{--});--}}
    {{--} );--}}
{{--</script>--}}
<script>
    $("#datepicker").datepicker({
        inline: true

    });

</script>
<script>
    $(document).ready(function(){
        $(".my-data").click(function(e){
            var text = $(this).text();
            $(".card-text").html(text);
            e.preventDefault();
        });
    });
</script>
</body>

@stop