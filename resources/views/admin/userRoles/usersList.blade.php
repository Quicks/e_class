@extends('layouts.app')
@section('content')
@foreach($users as $user)
	<tr>
		<th scope="row">1</th>
		<td>{{$user->name}}</td>
		<td>
			<a href="{{route('admin.userRoles.changeUserRole', [$user->id])}}" class="btn btn-primary">Change Role</a>

			{{ Form::open(array('url' => 'admin/userRoles/' . $user->id, 'class' => 'pull-right')) }}
			{{ Form::hidden('_method', 'DELETE') }}
			{{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}

			<a class="blue-text"><i class="fa fa-user"></i></a>
			<a class="teal-text"><i class="fa fa-pencil"></i></a>
			<a class="red-text"><i class="fa fa-times"></i></a>
		</td>
	</tr>
	<button><a href="/admin/changeUserRole">Change role</a></button>
@endforeach
@endsection