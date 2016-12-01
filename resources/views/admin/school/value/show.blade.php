@@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.schoolList.classList.daily.value.index', [$school->id, $klass->id, $daily->id]) }}">View All Value</a></li>
            <li><a href="{{ route('admin.schoolList.classList.daily.value.create', [$school->id, $klass->id, $daily->id]) }}">Create a Value</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">
        <p>
        <td>{{$value->value}}</td>
        <td>{{$value->date}}</td>
        </p>
    </div>
@endsection