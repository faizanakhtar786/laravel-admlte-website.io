
<!-- testimonals section -->
<div class="testimonals">
		<div class="container">
		<h3 class="heading"> From our <span> Great Clients</span> </h3>
			<div class="section_1its-feedback-grids">
				<div id="owl-demo" class="owl-carousel owl-theme">

				@foreach($testimonials as $test)	
					<div class="item">
						<div class="testimonal grid-1">
							<div class="first-grid">
								<img src="{{ url('uploads/'.$test->image)}}" alt="" />
								<h3>{{ $test->name }}</h3>
								<p>{{ $test->message }} </p>
							</div>
						</div>
					</div>
				@endforeach	

				</div>
			</div>
		</div>
	</div>
<!-- /testimonals section -->
