@extends('layout')
@section('content')
<h1>All the Items</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Spares</td>
			<td>Models</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($items as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->spareId }}</td>
			<td>{{ $value->modelId }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the item (uses the destroy method DESTROY /items/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				<!-- show the item (uses the show method found at GET /items/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('items/' . $value->id) }}">Show this Item</a>

				<!-- edit this item (uses the edit method found at GET /items/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('items/' . $value->id . '/edit') }}">Edit this Item</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop