@extends('admin.page')

@section('title', 'Edit Gallery')

@section('content_header')
    <h1>Edit Gallery</h1>
@stop

@section('content')

@parent

<a href="{{ route('gallery-list') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog">

      {!! Form::model($data,["files"=>true,"method"=>"put"]) !!}   
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Edit Category</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.gallery.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("Update",["class"=>"btn btn-success"]) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>




@stop