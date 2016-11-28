@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.roles.users_list') }}">View All Users</a></li>
        </ul>
    </nav>
    {{ Html::ul($errors->all()) }}
    {{ Form::model($user, array('route' => array('admin.roles.update_user_role', $user->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::select('role',  $roles) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', null, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the UserRole!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection
