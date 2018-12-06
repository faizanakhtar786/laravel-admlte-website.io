@extends("user.layout.master")
@section("title","404 | Page Not Found ")
@section("container")
<!-- inner pages banner -->
<div class="inner_pages_banner">
	<div class="slider-dot1">
		<span class="section_1-breadcrumbs"><a href="{{ route('home') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/</span>  <i class="fa fa-cogs"></i> 404</span>
	</div>
</div>
<!-- //inner pages banner -->

<img src="{{ url('404.jpg') }}">
@stop