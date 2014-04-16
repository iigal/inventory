<!-- app/views/groups/show.blade.php -->
@extends('layout')
@section('content')

<h1>Showing {{ $groups->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $groups->name }}</h2>
		<p>
			<strong>Parent:</strong> {{ $groups->parent }}
		</p>
	</div>

@stop