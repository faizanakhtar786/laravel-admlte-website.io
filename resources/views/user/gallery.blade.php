@extends("user.layout.master")
	
@section("title", "Gallery Here")

@section("meta_keyword", "Gallery Here")

@section("meta_description", "Gallery Here")


@section("container")
<!-- inner pages banner -->
<div class="inner_pages_banner">
	<div class="slider-dot1">
		<span class="section_1-breadcrumbs"><a href="{{ route('home') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/</span>  <i class="fa fa-photo"></i> Gallery</span>
	</div>
</div>
<!-- //inner pages banner -->



<!-- gallery -->
<div class="banner-bottom gallery">
	<div class="container">
		<h2 class="heading"> Our <span>Gallery</span> </h2>
		<div class="w3ls_gallery_grids">
			
		
		@foreach($galleries as $gallery)
			<div class="col-md-3 w3_section_1_gallery_grid">
				<div class="section_1_gallery_grid">
					<a title="{{ $gallery->description }}" href="{{ url('uploads/'.$gallery->image)}}">
						<div class="section_1_gallery_grid1">
							<img src="{{ url('uploads/'.$gallery->image)}}" alt=" " style="width: 270px;height:200px; border:5px solid silver;" class="img-responsive" />
							<div class="w3layouts_gallery_grid1_pos">
								
								<p> {{ $gallery->title }}</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		@endforeach


			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //gallery -->

@stop

@section("js")
<!-- simpleLightbox -->
	<script src="{{ url('user/js/simpleLightbox.js')}}"></script>
	<script>
		$('.w3_section_1_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
@stop

@section("css")
<link href="{{ url('user/css/simpleLightbox.css') }}" rel="stylesheet" type="text/css" /><!-- gallery css -->

@stop