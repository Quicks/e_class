@extends('layouts.app')
@section('content')
@foreach($users as $user)
	<div class="row">
		<tr>
			<th scope="row">1</th>
			<td>{{$user->name}}</td>
			@foreach ($user->roles as $roles)
				<td>{{$roles->title}}</td>
			@endforeach
			<td>
				<a href="{{route('admin.roles.change_user_role', ['id' => $user->id])}}" class="btn btn-primary">Change Role</a>
			</td>
		</tr>
	</div>
@endforeach
@endsection