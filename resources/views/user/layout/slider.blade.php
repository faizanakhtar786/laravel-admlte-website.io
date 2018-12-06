<!--Slider-->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider3">


			@foreach($sliders as $s)
			<li>
				<div class="slider-img{{ $loop->iteration }}" style="background-image: url({{ url('uploads/'.$s->image) }})">
					<div class="slider-dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
								<h2>Achal <span>Green</span> Corp</h2>
								<h4>{!! $s->title !!}</h4>
								<h4>{!! $s->content !!}</h4>
								
							</div>
						</div>
					</div>
				</div>
			</li>
			@endforeach

		</ul>
	</div>
</div>
<div class="clearfix"> </div>
<!--//Slider-->