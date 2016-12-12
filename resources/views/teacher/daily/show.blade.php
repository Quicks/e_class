@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="#">View All Daily</a></li>
            <li><a href="#">Create a Daily</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <p>
        {{--<td>{{$daily->subject}}</td>--}}
        <table>
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
                        <td>{{$user->value()->where('date' => )}}</td>
                    @endfor
                </tr>
            @endforeach

        </table>
        </p>
    </div>
@endsection