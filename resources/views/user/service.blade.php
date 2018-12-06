@extends("user.layout.master")

		
@section("title", "Service Here")

@section("meta_keyword", "Service Here")

@section("meta_description", "Service Here")



@section("container")
<style>
	body.modal-open #wrap{
    -webkit-filter: blur(70px);
    -moz-filter: blur(150px);
    -o-filter: blur(150px);
    -ms-filter: blur(150px);
    filter: blur(150px);
}
  
.modal-backdrop {background: grey;}

.close {
    font-size: 50px;
    display:block;
}.modal-backdrop {
    background:#707B7C;
    opacity: 0.7;
}

.modal-content {
    border: 2px solid red;
    border-radius: 0;
    webkit-box-shadow: none;
    box-shadow: none;
    padding:30px;
    color:white !important;
}

.modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
 content: '';
  display: inline-block;
  height: 10%;
/*  vertical-align: middle;
  margin-right: -4px;*/
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
</style>
<!-- inner pages banner -->
<div class="inner_pages_banner">
	<div class="slider-dot1">
		<span class="section_1-breadcrumbs"><a href="{{ route('home') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/</span>  <i class="fa fa-cogs"></i> Services</span>
	</div>
</div>
<!-- //inner pages banner -->

<!-- Services -->
<div class="services">
	<div class="container">
		<h2 class="heading"> Our <span>Services</span> </h2>
		<div class="service-grids">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />			
	<div class="wrap">
				
			<div class="service_right_grid col-md-12">
@foreach($services as $service)			

<div class="col-md-4"  data-toggle="modal" data-target="#{{ str_slug($service->name,'-') }}">
	<div class="innergrid1 deciduous margin" style="width:340px;height:160px;">
		<span class="fa {{ $service->icon }}" aria-hidden="true"></span>
		<h3>{{ $service->name }}</h3>
		
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="{{ str_slug($service->name,'-') }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="    color: red;">×</button>
        <br><br>
        <h1 style="    color: green;">{{ $service->name }}</h1>
      
        <h4 style="    color: ghostwhite; font-size: 20px !important;">{!! $service->description  !!}</h4>
       
        <hr>
     
      </div>
    </div>
  </div>
</div>
@endforeach
				
				
			</div>
			<div class="clearfix"></div>
		</div>
		</div>		
	</div>
	
	<div class="serv-grids">
		<div class="container">
			<div class="col-md-4 serv-grid1">
				<div class="inner_grid">
					<h3>GARDENING SRVICES</h3>
					<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
					
				</div>
			</div>
			<div class="col-md-4 serv-grid2">
				<div class="inner_grid">
					<h3>Fountain Service</h3>
					<p> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
					
				</div>
			</div>
			<div class="col-md-4 serv-grid3">
				<div class="inner_grid">
					<h3>ORGANIS Farming Service</h3>
					<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
					
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //Services -->



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