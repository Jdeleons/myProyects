
@extends('layout')

@section('content')

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

@endsection
@section('sidebar')
	<h2>Barra lateral personaliada</h2>
	@parent
@endsection
