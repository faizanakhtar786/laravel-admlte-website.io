@extends('admin.page')

@section('title', 'Add Gallery')

@section('content_header')
    <h1>Add Gallery</h1>
@stop

@section('content')

@parent

<a href="{{ route('gallery-list') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog">

       {!! Form::open(["files"=>true]) !!}  
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Add Category</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.gallery.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("Save",["class"=>"btn btn-success"]) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>




@stop