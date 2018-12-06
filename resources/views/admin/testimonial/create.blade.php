@extends('admin.page')

@section('title', 'Add Testimonial')

@section('content_header')
    <h1>Add Testimonial</h1>
@stop

@section('content')

@parent

<a href="{{ route('testimonial-list') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog modal-lg">

       {!! Form::open(["files"=>true]) !!}  
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Add testimonial</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.testimonial.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("Save",["class"=>"btn btn-success"]) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>




@stop