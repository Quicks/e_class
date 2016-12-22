@extends('layouts.app')
@section('content')
    <!-- Кнопка, вызывающее модальное окно -->
    <a href="#myModal" class="btn btn-primary" data-toggle="modal">Открыть модальное окно</a>
    <!-- HTML-код модального окна -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Value</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body" data-mark = "{{$user->getValueByDate($daily,date('Y').'-'.date('m').'-'.$day_of_month) }}">
                    Содержимое модального окна...
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </div>

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
                        <td>
                            <a  href="#myModal" class="value" data-user-id="{{$user->id}}" data-date="{{date('Y').'-'.date('m').'-'.$day_of_month }}"
                                data-value ="{{$user->getValueByDate($daily,date('Y').'-'.date('m').'-'.$day_of_month) }}">
                                {{$user->getValueByDate($daily,date('Y').'-'.date('m').'-'.$day_of_month) }}
                             </a>
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
                $("#myModal").modal('show');
                console.log($('.daily-table').data('daily-id'));
                console.log($(this).data('user-id'));
                console.log($(this).data('date'));
                console.log($(this).data('value'));
                console.log($('.daily-table').data('mark'));
            })
        })
    </script>
@endsection