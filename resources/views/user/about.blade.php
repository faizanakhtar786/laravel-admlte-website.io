@extends("user.layout.master")



@section("meta_keyword", $page->meta_keyword)

@section("meta_description", $page->meta_description)



@section("container")
<!-- inner pages banner -->
<div class="inner_pages_banner">
	<div class="slider-dot1">
		<span class="section_1-breadcrumbs"><a href="{{ route('home') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/</span>  <i class="fa fa-building"></i> About</span>
	</div>
</div>
<!-- //inner pages banner -->

<!-- Welcome -->
<div class="welcome">
	<div class="container">
		<h2 class="heading"> {!! $page->name !!} </h2>
		<div class="col-md-6 about_left">
			{!! $page->shortdescription !!}
			
		</div>
		<div class="col-md-6 about_right">
			
			<img class="top_img1" src="{{ url('uploads/'.$page->image)}}" alt="" style="height:350px;"/>
			
		</div>
		<div class="clearfix"> </div>
		<br><br>
		<!-- welcome bottom -->
<div class="container">
	<div class="about-section_1">
		<div class="inner-padding" style="font-weight:bolder; font-size:23px;text-algin:center; color:white !important;     padding: 2em 0 !important;">
			<h3 class="heading-section_1info white-w3ls " style="color:red !important;">ENCOURAGING GREENARY</h3>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
			
		</div>
	</div>
</div>
	
	</div>
</div>
<!-- //Welcome -->


@include("user.layout.testimonial")

@stop