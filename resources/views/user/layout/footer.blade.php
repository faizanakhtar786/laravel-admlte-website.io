<!--footer -->
<div class="footer footer_w3layouts_section_1its">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p><b>Our Mission</b>: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.  </p><p>
<b>Our Vision</b>: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
.</p>
					<ul class="social_section_1info">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Contact Info</h3>
				</div>
				<div class="contact-info">
					<h4>Location :</h4>
					
					<p>Address</p>
					<div class="phone">
						<h4>Phone : +91 9661211293 </h4>
						<p>Phone :  +91 </p>
						<p>Email : <a href="mailto:thefaizanakhtar@gmail.com">thefaizanakhtar@gmail.com </a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Useful Links</h3>
				</div>
				<ul class="links">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('about') }}">About Us</a></li>
					<li><a href="{{ route('service') }}">Services</a></li>	
					<li><a href="{{ route('gallery') }}">Gallery</a></li>
					<li><a href="{{ route('contact') }}">Contact Us</a></li>
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="copyright">
			<p>© 2018 <a href="#">F a i z a n   A k h t a r </a> </p>
		</div>
	</div>
</div>
<!-- //footer -->


	<!-- js -->
	<script src="{{ url('user/js/jquery-2.1.4.min.js')}}"></script>
	<!-- //js -->

	@yield("js")
	

@if(Route::currentRouteName()=="home") 
	<!-- Team bottom FlexSlider -->
	<script defer src="{{ url('user/js/jquery.flexslider.js')}}"></script>
	<script>
		$(window).load(function () {
			$('#carousel').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: true,
				slideshow: false,
				itemWidth: 102,
				itemMargin: 5,
				asNavFor: '#slider'
			});

			$('#slider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: true,
				slideshow: true,
				sync: "#carousel",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- // Team bottom FlexSlider -->

	<!-- Banner Responsive slider -->
	<script src="{{ url('user/js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsive slider -->
@endif


	<!-- for testimonials slider-js-file-->
	<script src="{{ url('user/js/owl.carousel.js')}}"></script>
	<!-- //for testimonials slider-js-file-->
	<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({

			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay:true,
			items : 3,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4]
		});
	}); 
	</script>
	<!-- for testimonials slider-js-script-->

	<script src="{{ url('user/js/SmoothScroll.min.js')}}"></script>
	<!-- start-smoth-scrolling -->
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
	<!-- move to top-js-files -->
	<script src="{{ url('user/js/move-top.js')}}"></script>
	<script src="{{ url('user/js/easing.js')}}"></script>
	<!-- //move to top-js-files -->

	<script  src="{{ url('user/js/bootstrap-3.1.1.min.js')}}"></script><!-- bootstrap js file -->

</body>
</html>