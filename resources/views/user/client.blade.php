@extends("user.layout.master")

	
@section("title", "List Of Clients")

@section("meta_keyword", "List of clients")

@section("meta_description", "List Of clients")


@section("container")
<style>
	.outerpadding{
    padding:10% 0%;}
.boximg{
	position:relative;
	overflow:hidden;
	}
	
.boximg img{
		transition:all ease-in 500ms;
		border:1px solid #fff;
	}	
.boximg img:hover{
	transform:scale(1.3,1.3);
	cursor:pointer;
	
	}	
	
.boximg:hover{
	border:1px solid #fff;
	}	
	
.date{
	 left: 0;
    position: absolute;
    top: 15px;
	padding:5px;
	background-color:#112915;
	opacity:0;
	transition:all ease-in 300ms;
	
	}	
	
.likebut{
	  background: none repeat scroll 0 0 #112915#112915;
    height: 25px;
    padding: 7px;
    position: absolute;
    right: 5px;
    top: 130px;
    width: 25px;
	opacity:0.4;
	transition:all ease-in 300ms;
	}
	
	
.boximg:hover .date{
	opacity:1;
	
	}	
.boximg:hover .likebut{
	opacity:1;
	
}

</style>

<!-- inner pages banner -->
<div class="inner_pages_banner">
	<div class="slider-dot1">
		<span class="section_1-breadcrumbs"><a href="{{ route('home') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/</span>  <i class="fa fa-user"></i> Client</span>
	</div>
</div>
<!-- //inner pages banner -->

<!-- Services -->
<div class="services">
	<div class="container">
		<h2 class="heading"> Our <span>Client</span> </h2>
		
	


<div class="container outerpadding">
<div class="row">




@foreach($clients as $client)

  <div class="col-lg-3" style="height:385px;">
     <div class="panel">
        <div class="panel-heading" style="background-color:#112915;color:#fff;"><strong>{{ $client->name }}</strong></div>
        <div class="panel-body" style="color:#fff; box-shadow:0 -12px 13px #112915 inset;">
        
        <div class="boximg">
         <img src="{{ url('uploads/'.$client->feature_image)}}" class="img-responsive" style="width:238px; height:200px;">
         <span class="label label-danger date">{{ $client->created_at }}</span>
         <span class="likebut glyphicon glyphicon-tag"></span>
         </div>
         
         
   <br>
        <p class="pull-left"><a href="{{ route('clientdetail',$client->id)}}">
        	
        	{!! str_limit(strip_tags($client->description),100)  !!}
        </a><br>
			@for($i=1;$i<=$client->rate;$i++)
           <span class="glyphicon glyphicon-star" style="font-size:18px;"></span>
           	@endfor
        </p>
     
       
      </div>
     </div>
  </div>
 

@endforeach















 </div>

</div>





	</div>
	
</div>
<!-- //Services -->
@include("user.layout.testimonial")

@stop

@section("js")
<!-- stats -->
	<script src="{{ url('user/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ url('user/js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

@stop