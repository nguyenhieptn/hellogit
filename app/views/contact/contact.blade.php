@extends('layouts.layout')

@section('style')
@parent
<link href="css/pages/contact.css" rel="stylesheet" type="text/css" />
@stop


@section('content')
<?php echo 'Contact us:</br>';
echo 'EXP Company</br>';
echo 'Thai Nguyen, Vietnam</br>';
?>
@stop

@section('javascript')
@parent
<script src="js/pages/contact.js" type="text/javascript"></script>
@stop