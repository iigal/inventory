@extends('layout')

@section('content')

<h1>Create Stock</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'itemsin')) }}

	<div class="form-item">
		{{ Form::label('spare', 'Spares') }}
		{{ Form::select('spareId', $spares, Input::old('item_level'), array('class' => 'form-control')) }}
	</div>
	<div class="form-item">
		{{ Form::label('model', 'Models') }}
		{{ Form::select('modelId', $models, Input::old('item_level'), array('class' => 'form-control')) }}
	</div>
	<div class="form-item">
		{{ Form::label('provider', 'Providers') }}
		{{ Form::select('providerId', $providers, Input::old('item_level'), array('class' => 'form-control')) }}
	</div>
	<div class="form-item">
		{{ Form::label('costprice', 'Cost Price (Rate/pc)') }}
		{{ Form::text('costPrice', Input::old('item_level'), array('class' => 'form-control')) }}
	</div>
	<div class="form-item">
		{{ Form::label('quantity', 'Quantity') }}
		{{ Form::text('quantity', Input::old('item_level'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the item!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

