@extends('layout')

@section('content')

<h1>Create a group</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'groups')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('parent', 'parent') }}
		{{ Form::select('parent', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('group_level'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the group!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop
