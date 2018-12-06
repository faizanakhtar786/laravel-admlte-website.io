@extends('admin.page')

@section('title', 'Pages List')

@section('content_header')
    <h1>Pages List</h1>
@stop

@section('content')

@parent

<a href="{{ route('page-add') }}" class="btn btn-info btn-xs">	<span class="fa fa-plus"></span> Add </a>

    <div class="alert"></div>
    <table class="table table-bordered" id="table-datatable">
    	<thead>
    		<tr>
    			<th>Name</th>
                <th>Title</th>
    			
    			<th>Image</th>
    		
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($data as $d)
    			<tr>
    				<td> {{ $d->name }}</td>
                    <td> {{ $d->title }}</td>
    				
    				<td> <img src="{{ url('uploads/'.$d->image) }}" width="100" height="50"></td>
    				
    				<td> 
    					<a href="{{ route('page-edit',$d->id) }}" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span></a>
                        {{--
    					<a href="{{ route('page-delete',$d->id) }}" onclick="return confirm('Do you want to delete')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
--}}
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