@extends('layout')
@section('content')
<h1>All the Groups</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Parent</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($groups as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->parent }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the group (uses the destroy method DESTROY /groups/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				<!-- show the group (uses the show method found at GET /groups/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('groups/' . $value->id) }}">Show this Group</a>

				<!-- edit this group (uses the edit method found at GET /groups/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('groups/' . $value->id . '/edit') }}">Edit this Group</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop