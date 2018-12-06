@extends('admin.page')

@section('title', 'Add Service')

@section('content_header')
    <h1>Add Service</h1>
@stop

@section('content')

@parent

<a href="{{ route('services.index') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog modal-lg">

       {!! Form::open(["files"=>true,"route"=>"services.store"]) !!}  
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Add Service</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.service.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("Save",["class"=>"btn btn-success"]) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>




@stop

@section('js')
  @parent
<script src="{{ URL('cskeditor/ckeditor.js')}}"></script>



<script>
$(document).ready(function(){

  CKEDITOR.replace( 'editor' ); 
    
        
       
})
</script>
@stop