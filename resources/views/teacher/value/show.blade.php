@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <p>
        <table>
            <tr>
                <th>Name/Date</th>
                @for($day_of_month = 1; $day_of_month <= cal_days_in_month(CAL_GREGORIAN, date('m'), date('y')); $day_of_month++)
                    <th>{{$day_of_month}}</th>
                @endfor
            </tr>
            <tr>
                <td>{{$student->name}}</td>
                @for($day_of_month = 1; $day_of_month <= cal_days_in_month(CAL_GREGORIAN, date('m'), date('y')); $day_of_month++)
                    <td>
                        {{--{{$temp = date('y') + date('m') + $day_of_month}}--}}
                        {{--{{dd($temp)}}--}}
                        {{--{{$student->getValueByDate($daily,DateTime::createFromFormat('Y-m-d', '23/05/2013') )}}--}}
                        {{--@foreach($values as $value)--}}

                            {{--<a href="{{route('teacher.daily.user.value.edit', [$daily, $student, $value])}}">--}}
                                {{--{{$value->value}}--}}
                            {{--</a>--}}
                        {{--@endforeach--}}
                    </td>
                @endfor
            </tr>
        </table>
        <a href="{{route('teacher.daily.user.value.create', [$daily, $student])}}" class="btn btn-primary">Create</a>
        </p>
    </div>
@endsection