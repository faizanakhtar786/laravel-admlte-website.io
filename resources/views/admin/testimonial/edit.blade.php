@extends('admin.page')

@section('title', 'Edit Testimonial')

@section('content_header')
    <h1>Edit Testimonial</h1>
@stop

@section('content')

@parent

<a href="{{ route('testimonial-list') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog modal-lg">

      {!! Form::model($data,["files"=>true,"method"=>"put"]) !!}  
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Edit testimonial</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.testimonial.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("Update",["class"=>"btn btn-success"]) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>




@stop