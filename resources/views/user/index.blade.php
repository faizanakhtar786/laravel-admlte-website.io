@extends("user.layout.master")



@section("meta_keyword", $page->meta_keyword)

@section("meta_description", $page->meta_description)


@section("slider")
	@include("user.layout.slider")
@stop

@section("container")
<!-- Welcome -->
<div class="welcome">
	<div class="container">
		<h3 class="heading"> Achal Green Corp</h3>
		<div class="col-md-4 about_right">
			
			<img class="top_img1" src="{{ url('uploads/'.$page->image)}}" alt="" />
			
		</div>
		<div class="col-md-8 welcome_right">
			{!! $page->shortdescription  !!}
			<div class="know">
				<a href="{{ route('about') }}">Know more </a>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //Welcome -->

<!-- welcome bottom -->
<div class="container">
	<div class="about-section_1">
		<div class="inner-padding">
			<h3 class="heading-section_1info white-w3ls">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus </p>
			<div class="know">
				<a href="{{ route('contact') }}">Talk with us </a>
			</div>
		</div>
	</div>
</div>
<div class="bottom">
	<div class="container">
		<div class="bottom_grids">
			<div class="col-md-4 bottom_grid1">
				<h3>Garden expertise</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
			</div>
			<div class="col-md-4 bottom_grid1">
				<h3>Achivement </h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. /p>
			</div>
			<div class="col-md-4 bottom_grid1">
				<h3>Consultancy  </h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //welcome bottom -->

@include("user.layout.team")

@include("user.layout.how-does-work")
@stop