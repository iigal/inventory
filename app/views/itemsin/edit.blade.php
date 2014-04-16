@extends('layout')
@section('content')

<h1>Edit {{ $group->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($group, array('route' => array('groups.update', $group->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('parent', 'Parent') }}
		{{ Form::select('parent', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Group!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop