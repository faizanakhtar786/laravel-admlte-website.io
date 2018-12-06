@extends('admin.page')

@section('title', 'Services List')

@section('content_header')
    <h1>Services List</h1>
@stop

@section('content')

@parent

<a href="{{ route('services.create') }}" class="btn btn-info btn-xs">	<span class="fa fa-plus"></span> Add </a>

    <div class="alert"></div>
    <table class="table table-bordered" id="table-datatable">
    	<thead>
    		<tr>
    			<th>Name</th>
                <th>Icon</th>
    			
    			<th>Description</th>
    		     
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($data as $d)
    			<tr>
    				<td> {{ $d->name }}</td>
                    <td> <i class="fa {{ $d->icon }} fa-3x"></i> </td>
    				
    				
    				<td>
                          {{ str_limit($d->description,20) }}     
                    </td>
    				<td> 
    					<a href="{{ route('services.edit',$d->id) }}" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span></a>
                       
    					<form action="{{ route('services.destroy',$d->id)}}" style="display: inline-block;"  method="post" onsubmit="return confirm('Do you want to DELETE')">
                                                    {{ csrf_field() }} {{ method_field('DELETE') }}

                            <button  class="btn btn-danger btn-xs"> <span class="fa fa-trash"></span> </button>
                            
                        </form>

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