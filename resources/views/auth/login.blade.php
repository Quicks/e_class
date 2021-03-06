@extends('layouts.app')
<style>

    .panel-default>.panel-heading{
        background-color: #0275d8!important;
        color: white!important;
    }
    .col-md-4{
        font-size: 1rem!important;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Вхід</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Електронна адреса</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Запам'ятати мене
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>
                                    {{--<a href="{{url('/teacher')}}" style="color: white">--}}

                                    {{--</a>--}}
                                    Вхід
                                </button>
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--<i class="fa fa-btn fa-user"></i>--}}
                                    {{--<a href="{{ url('/register') }}">Реєстрація</a>--}}
                                    {{--</button>--}}

                                <button type="submit" class="btn btn-primary fa fa-btn fa-user">
                                    <a href="{{ url('/register') }}" style="color: mintcream">Реєстрація</a>
                                    {{--<i class="fa fa-btn fa-user"></i> --}}
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Забули Ваш пароль?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
