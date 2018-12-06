@extends('admin.page')

@section('title', 'Edit Team')

@section('content_header')
    <h1>Edit Team</h1>
@stop

@section('content')

@parent

<a href="{{ route('team-list') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog modal-lg">

       {!! Form::model($data,["files"=>true,"method"=>"put"]) !!}  
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Edit Team</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.team.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("Update",["class"=>"btn btn-success"]) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>




@stop