@extends('admin.page')

@section('title', 'clients List')

@section('content_header')
    <h1>clients List</h1>
@stop

@section('content')

@parent

<a href="{{ route('client-add') }}" class="btn btn-info btn-xs">	<span class="fa fa-plus"></span> Add </a>

    <div class="alert"></div>
    <table class="table table-bordered" id="table-datatable">
    	<thead>
    		<tr>
    			<th>Name</th>
                <th>Title</th>
    			
    			<th>Feature Image</th>
    		      <th>Images</th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($data as $d)
    			<tr>
    				<td> {{ $d->name }}</td>
                    <td> {{ $d->email }}</td>
    				
    				<td> <img src="{{ url('uploads/'.$d->feature_image) }}" width="100" height="50"></td>
    				<td>
                    @isset($d->images)
                        @if($d->images!="")
                            @php
                                $images=explode("-&",$d->images);
                                array_pop($images);
                            @endphp
                            @foreach($images as $image)
            <img src="{{ url('uploads/'.$image) }}" width="50" height="50">
                            @endforeach
                        @endif
                    @endisset            
                    </td>
    				<td> 
    					<a href="{{ route('client-edit',$d->id) }}" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span></a>
                       
    					<a href="{{ route('client-delete',$d->id) }}" onclick="return confirm('Do you want to delete')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>

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