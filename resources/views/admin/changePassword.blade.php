@extends('admin.page')
@section('title', 'Change Password')

@section('content_header')
    <h1>Change Password</h1>
@stop

@section('content')
    @parent
{!! Form::open() !!}
 <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Change Password</h4>
      </div>
      <div class="modal-body">
        
       	<div class="form-group">
       		<label for="">Current Password</label>
       			{!! Form::text("password",null,["class"=>"form-control"]) !!}
       			<span class="text-danger">{{ $errors->first('password') }}</span>   
       	</div>
       	<div class="form-group">
       		<label for="">New Password</label>
       			{!! Form::text("npassword",null,["class"=>"form-control"]) !!}
       			<span class="text-danger">{{ $errors->first('npassword') }}</span>   
       	</div>
       	<div class="form-group">
       		<label for="">Confirm Password</label>
       			{!! Form::text("cpassword",null,["class"=>"form-control"]) !!}
       			<span class="text-danger">{{ $errors->first('cpassword') }}</span>   
       	</div>
       
      </div>
      <div class="modal-footer">
      	{!! Form::submit('Save',["class"=>"btn btn-success"]) !!}
      
      </div>
    </div>

  </div>
{!! Form::close() !!}


@stop