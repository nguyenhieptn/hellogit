@extends('layouts.layout')

@section('content')

<p>
{{link_to_route("znews.create", "Add new", array(), array('class' => 'btn btn-primary'))}}
</p>

<h3>List</h3>

<table class="table table-bordered table-hover dataTable">
    <thead>
        <tr>
        <th rowspan="1" colspan="1">Id</th>
        <th rowspan="1" colspan="1">Name</th>
        <th rowspan="1" colspan="1">Amount</th>
        <th rowspan="1" colspan="1">Weight</th>
        <th rowspan="1" colspan="1">Process</th>
        </tr>
    </thead>
	<tbody role="alert" aria-live="polite" aria-relevant="all">
	@foreach($news as $new)
		<tr class="odd">
	        <td class="">{{$new->id}}</td>
	        <td class=" ">{{$new->name}}</td>
	        <td class=" ">{{$new->amount}}</td>
	        <td class=" ">{{$new->abc}}</td>
	        <td class=" ">
				{{link_to_route('znews.edit', 'Edit', array($new->id), array('class' => 'btn btn-primary pull-left'))}}
				{{Form::model($new, array('route' => array('znews.destroy',$new->id), 'method' => 'DELETE'))}}
					{{Form::submit('Delete',  array('class' => 'btn btn-danger pull-left', 'onclick' => 'return confirm("Do you want delete this post")'))}}
				{{Form::close()}}
	        </td>
	    </tr>
	@endforeach
	</tbody>
</table>


@stop