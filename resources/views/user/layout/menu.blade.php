<!--Header-->
<div class="header" id="home">
	<div class="head">
		<div class="container">
			<div class="navbar-top">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					 <div class="navbar-brand logo ">
						<h1 style="font-size: 30px;"><a href="{{ route('home') }}"><i class="">Achal</i> <i class="">Green</i> <i class="">Corp.</i></a></h1>
					</div>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav link-effect-4">
					<li class="{{ (Route::currentRouteName()=='home')?'active':''}} first-list"><a href="{{ route('home') }}">Home</a></li>
					<li class="{{ (Route::currentRouteName()=='about')?'active':''}}"><a href="{{ route('about') }}">About</a></li>
					<li class="{{ (Route::currentRouteName()=='service')?'active':''}}"><a href="{{ route('service') }}">Services</a></li>
					<li class="{{ (Route::currentRouteName()=='client')?'active':''}}"><a href="{{ route('client') }}">Client</a></li>
					<li class="{{ (Route::currentRouteName()=='gallery')?'active':''}}"><a href="{{ route('gallery') }}">Gallery</a></li>
					   
					<li class="{{ (Route::currentRouteName()=='contact')?'active':''}}"><a href="{{ route('contact') }}">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</div>
	</div>
</div>
<!--//Header--> 