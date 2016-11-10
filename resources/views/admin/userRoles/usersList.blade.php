@extends('layouts.app')
@section('content')
@foreach($users as $user)
	<div class="row">
		<tr>
			<th scope="row">1</th>
			<td>{{$user->name}}</td>
			<td>
				<a href="{{route('admin.roles.change_user_role', ['id' => $user->id])}}" class="btn btn-primary">Change Role</a>

				<a class="blue-text"><i class="fa fa-user"></i></a>
				<a class="teal-text"><i class="fa fa-pencil"></i></a>
				<a class="red-text"><i class="fa fa-times"></i></a>
			</td>
		</tr>
	</div>
@endforeach
@endsection