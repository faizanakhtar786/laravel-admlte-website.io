@extends("user.layout.master")


	
@section("title", "Contact us")

@section("meta_keyword", "Contact us")

@section("meta_description", "Contact us")


@section("container")
<!-- inner pages banner -->
<div class="inner_pages_banner">
	<div class="slider-dot1">
		<span class="section_1-breadcrumbs"><a href="{{ route('home') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/</span>  <i class="fa fa-envelope"></i> Contact</span>
	</div>
</div>
<!-- //inner pages banner -->
<!-- contact -->
<div class="contact">
	<div class="container">
	@if(Session::has("success"))
		<div class="alert alert-success text-center text-uppercase"> {{ Session::get("success") }} </div>
	@endif
		<h2 class="heading"> Get In <span>Touch</span> </h2>
	</div>
		<div class="section_1-contact-form">
			<div class="col-md-6 contact-form-left">
				<div class="contact-form-top">
					<h3>Contact us</h3>
					<p>for Gardening services, Plants, tools, and also consults our experts.</p>
				</div>
				<div class="contact-info">
					<h4>Location :</h4>
					<p>Address</p>
					<div class="phone">
						<h4>Phone :</h4>
						<p>Phone : +91 96 61 21 12 93</p>
					</div>
					<div class="phone">
						<h4>Email :</h4>
						<p>Email : <a href="mailto:thefaizanakhtar@gmail.com">thefaizanakhtar@gmail.com </a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 contact-form-right">
				<div class="contact-form-top">
					<h3>Find us</h3>
				</div>
				<div class="map">
					
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.5401457708585!2d75.20400871494012!3d30.843548987334817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a0942ded58eb3%3A0x97f3fae72e4dd96a!2sGoogle+Headquarters!5e0!3m2!1sen!2sin!4v1544076190786" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="contact-form">
			<div class="container">
				<div class="contact-form-top">
					<h3>Send a message</h3>
				</div>
				<div class="section_1its_section_1_about_mail">
					{!! Form::open() !!}
						<div class="section_1its_section_1_about_mail_left">
							
							{!! Form::text('name',null,["placeholder"=>"Enter Your Name","required"=>"required"]) !!}

							{!! Form::email('email',null,["placeholder"=>"Enter Your Email ID.","required"=>"required"]) !!}

							{!! Form::text('mobile',null,["class"=>"last","placeholder"=>"Enter Your Mobile no."]) !!}
							<div class="clearfix"> </div>
						</div>
						
						{!! Form::textarea('message',null,["placeholder"=>"Message.....","required"=>"required"])!!}
						<div class="submit">
							{!! Form::submit('Send Feedback')!!}
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
</div>
<!-- //contact -->
@stop