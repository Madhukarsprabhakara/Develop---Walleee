<html>

<p> Walleee form goes in here when y</p>
<ul>
@foreach ($info as $user)
<a href="/users/{{$user->id}}">
	<li>{{$user->name}}, {{$user->email}}</li>
</a>
@endforeach
</ul>
</html>