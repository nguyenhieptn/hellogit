@extends('layouts.layout')

@section('style')
@parent
<link href="css/pages/blank.css" rel="stylesheet" type="text/css" />
@stop


@section('content')
<ul class="list-group-item">
    @foreach($data as $d)
    <li>{{ $d->title }}</li>
    @endforeach
</ul>
@stop

@section('javascript')
@parent
<script src="js/pages/blank.js" type="text/javascript"></script>
@stop