@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                User Subject - {{$timetable -> home_task}};

                <table border="1">
                    <caption>Розклад уроків</caption>
                    <tr>
                        <th>Понеділок</th>
                        <th>Вівторок</th>
                        <th>Середа</th>
                        <th>Четвер</th>
                        <th>П'ятниця</th>
                    </tr>
                    <tr>
                        <td>Математика</td>
                        <td>Письмо</td>
                        <td>Англійська мова</td>
                        <td>Трудове навчання</td>
                        <td>Образотворче мистецтво</td>
                    </tr>
                    <tr>
                        <td>Англійська мова</td>
                        <td>Природознавство</td>
                        <td>Фізкультура</td>
                        <td>Читання</td>
                        <td>Математика</td>
                    </tr>
                    <tr>
                        <td>Фізкультура</td>
                        <td>Основи здоровя</td>
                        <td>Англійська мова</td>
                        <td>Письмо</td>
                        <td>Музика</td>
                    </tr>
                    <tr> <td>Математика</td>
                        <td>Письмо</td>
                        <td>Англійська мова</td>
                        <td>Трудове навчання</td>
                        <td>Читання</td>
                    </tr>
                    <tr>
                        <td>Фізкультура</td>
                        <td>Математика</td>
                        <td>Музика</td>
                        <td>Образотворче мистецтво</td>
                        <td>Письмо</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
