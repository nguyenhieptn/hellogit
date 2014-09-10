@extends('layouts.layout')

@section('content')

{{var_dump(Session::get('errors'))}}

{{Form::open(array('route'=>'znews.store'))}}
	<div class="form-group has-success">
	    {{Form::label('name', 'Name')}}
	    {{ Form::text('name',Input::old('name'),array('class'=>'form-control','placeholder'=>'Enter...'))}}
	</div>
	<div class="form-group has-success">
	    {{Form::label('amount', 'Amount')}}
	    {{ Form::text('amount',Input::old('amount'),array('class'=>'form-control','placeholder'=>'123'))}}
	</div>
	<div class="form-group has-success">
	    {{Form::label('abc', 'Weight')}}
	    {{ Form::text('abc',Input::old('abc'),array('class'=>'form-control','placeholder'=>'123'))}}
	</div>
	<div class="form-group has-success">
		{{Form::submit('Save', array('class' => 'btn btn-primary'))}}
	</div>
{{Form::close()}}

@stop