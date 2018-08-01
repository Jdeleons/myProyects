<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Listado de usuarios</title>
	</head>
	<body>
		<h1>{{$title}}</h1>
		<hr>

		@if (! empty($users))
		<ul>
			@foreach ($users as $user)
				 <li>{{ $user}} </li>
			@endforeach
		</ul>

		@else
			<p>No hay usuarios registrados</p>
		@endif
		{{ time('dd/mm/y')}}
	</body>
</html>
