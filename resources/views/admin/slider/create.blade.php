@extends('admin.page')

@section('title', 'Add Slider')

@section('content_header')
    <h1>Add Slider</h1>
@stop

@section('content')

@parent

<a href="{{ route('slider-list') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog">

       {!! Form::open(["files"=>true]) !!}  
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Add Slider</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.slider.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("Save",["class"=>"btn btn-success"]) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>




@stop