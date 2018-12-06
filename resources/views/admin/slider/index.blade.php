@extends('admin.page')

@section('title', 'Sliders List')

@section('content_header')
    <h1>Sliders List</h1>
@stop

@section('content')

@parent

<a href="{{ route('slider-add') }}" class="btn btn-info btn-xs">	<span class="fa fa-plus"></span> Add </a>

    <div class="alert"></div>
    <table class="table table-bordered" id="table-datatable">
    	<thead>
    		<tr>
    			<th>Name</th>
    			<th>Content</th>
    			<th>Image</th>
    			
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($data as $d)
    			<tr>
    				<td> {{ $d->title }}</td>
    				<td> {{ str_limit($d->content,50) }}</td>
    				<td> <img src="{{ url('uploads/'.$d->image) }}" width="100" height="50"></td>
    			
    				<td> 
    					<a href="{{ route('slider-edit',$d->id) }}" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span></a>
    					<a href="{{ route('slider-delete',$d->id) }}" onclick="return confirm('Do you want to delete')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>

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