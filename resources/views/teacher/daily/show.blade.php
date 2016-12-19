@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('teacher.daily.index') }}">View All Daily</a></li>
            <li><a href="{{ route('teacher.daily.create') }}">Create a Daily</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <p>
        {{--<td>{{$daily->subject}}</td>--}}
        <table class="daily-table" data-daily-id="{{$daily->id}}">
            <tr>
                <th>Name/Date</th>
                @for($day_of_month = 1; $day_of_month <= cal_days_in_month(CAL_GREGORIAN, date('m'), date('y')); $day_of_month++)
                    <th>{{$day_of_month}}</th>
                @endfor
            </tr>

            @foreach($users as $user )
                <tr>
                     <td>{{$user->name}}</td>
                    @for($day_of_month = 1; $day_of_month <= cal_days_in_month(CAL_GREGORIAN, date('m'), date('y')); $day_of_month++)
                        <td class="value" data-user-id="{{$user->id}}" data-date="{{date('Y').'-'.date('m').'-'.$day_of_month}}">
                            {{$user->getValueByDate($daily,date('Y').'-'.date('m').'-'.$day_of_month) }}
                            {{--dd({{$user->value}})--}}
                        </td>
                    @endfor
                </tr>
            @endforeach

        </table>
        </p>
    </div>
    <script>
        $(document).ready(function () {
            $('.value').click(function() {
                console.log($('.daily-table').data('daily-id'));
                console.log($(this).data('user-id'));
                console.log($(this).data('date'));
                //todo при клике делаем этот элемент контент-едитабле, он станет редактируемым
            })
        })
    </script>
@endsection