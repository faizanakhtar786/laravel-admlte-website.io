@extends('admin.page')

@section('title', 'Feedback List')

@section('content_header')
    <h1>Feedback List</h1>
@stop

@section('content')

@parent

<a href="{{ route('feedback-add') }}" class="btn btn-info btn-xs">	<span class="fa fa-plus"></span> Add </a>

    <div class="alert"></div>
    <table class="table table-bordered" id="table-datatable">
    	<thead>
    		<tr>
    			<th>Name</th>
    			<th>Email</th>
    			<th>Mobile</th>
    			<th>Message </th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($data as $d)
    			<tr>
    				<td> {{ $d->name }}</td>
    				<td> {{ $d->email }}</td>
    				<td> {{ $d->mobile }}</td>
    				<td> {{ str_limit($d->massage,50) }}</td>
    				<td> 
    					<a href="#" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span></a>
    					<a href="{{ route('feedback-delete',$d->id) }}" onclick="return confirm('Do you want to delete')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>

    				</td>
    			</tr>
    		@endforeach
    	</tbody>
    </table>
@stop


@section("js")

<script>
	$(document).ready(function(){
		$("#table-datatable").dataTable();
	})
</script>

@stop