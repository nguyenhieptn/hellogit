@extends('layouts.layout')

@section('style')
@parent
{{ HTML::style('css/pages/blank.css') }}
@stop


@section('content')

{{ Form::open(array('url'=>'news')) }}
<div class="col-md-6">
    <div class="form-group has-success">
        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Category Name</label>
        {{ Form::text('name',Input::old('name'),array('class'=>'form-control','placeholder'=>'Enter...','id'=>'inputSuccess')) }}
    </div>
</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary jm_submit">Submit</button>
</div>
{{ Form::token() }}
{{ Form::close() }}


@stop

@section('javascript')
@parent
{{ HTML::script('js/pages/blank.js') }}
@stop