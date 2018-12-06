@extends('admin.page')

@section('title', 'Edit Service')

@section('content_header')
    <h1>Edit Service</h1>
@stop

@section('content')
  @parent
<a href="{{ route('services.index') }}" class="btn btn-primary btn-xs"> <span class="fa fa-arrow-left"></span> Back </a>
    <div class="alert"></div>

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Edit Service</h4>
      </div>
      <div class="modal-body">
        {!! Form::model($data,["files"=>true,"route"=>["services.update",$data->id],"method"=>"put"]) !!}

          @include('admin.service.form')
<div class="form-group text-right">
  {!! Form::submit('Save',["class"=>"btn btn-warning"]) !!}
</div>
        {!! Form::close() !!}
      </div>
      
    </div>

  </div>


  @stop