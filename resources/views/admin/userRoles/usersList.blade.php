
@foreach($users as $user)
	{{$user->name}}
	<button><a href="/admin/changeUserRole">Change role</a></button>
@endforeach