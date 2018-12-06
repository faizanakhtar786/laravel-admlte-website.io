@extends('admin.page')

@section('title', 'Edit Page')

@section('content_header')
    <h1>Edit Page</h1>
@stop

@section('content')

@parent

<a href="{{ route('page-list') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog modal-lg">

       {!! Form::model($data,["files"=>true,"method"=>"put"]) !!}  
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Edit Page</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.page.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("update",["class"=>"btn btn-success"]) !!}
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
     CKEDITOR.replace( 'editor2' ); 
        
       
})
</script>
@stop