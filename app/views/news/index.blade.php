@extends('layouts.layout')

@section('style')
@parent
{{ HTML::style('css/pages/blank.css') }}
@stop


@section('content')
<ul class="list-group-item">
    @foreach($data as $d)
    {{ $d->name }}
    @endforeach
</ul>
@stop

@section('javascript')
@parent
{{ HTML::script('js/pages/blank.js') }}
@stop