@extends('layouts.layout')

@section('style')
@parent
<link href="css/pages/blank.css" rel="stylesheet" type="text/css" />
@stop


@section('content')
{{ Form::open(array('url' => 'hieu')) }}

	<div class="form-group">
		{{ Form::label('title', 'title') }}
		{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('description', 'description') }}
		{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create new', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop

@section('javascript')
@parent
<script src="js/pages/blank.js" type="text/javascript"></script>
@stop