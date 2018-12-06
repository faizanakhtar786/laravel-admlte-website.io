@extends("user.layout.master")
  
@section("title", $client->name)

@section("meta_keyword",  $client->name)

@section("meta_description",  $client->name)

	

@section("container")
<link rel="stylesheet" href="{{ url('user/css/clientdetail.css') }}">
<!-- inner pages banner -->
<div class="inner_pages_banner">
	<div class="slider-dot1">
		<span class="section_1-breadcrumbs"><a href="{{ route('home') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/</span>  <i class="fa fa-user"></i> Client Details</span>
	</div>
</div>
<!-- //inner pages banner -->

<!-- Services -->
<div class="services">
	<div class="container">
		<h2 class="heading"> Our <span>Client Details</span> </h2>
		
	

  
  <div class="container">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="{{ url('uploads/'.$client->feature_image)}}" /></div>
              
            </div>
          
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">{{ $client->name }}</h3>
            <div class="rating">
              <div class="stars">
                @for($i=1;$i<=5;$i++)
                  @if($i<=$client->rate)
                    <span class="fa fa-star checked"></span>
                    @else
                     <span class="fa fa-star "></span>
                    @endif
               @endfor
              </div>
            
            </div>
           
            <p class="vote"><strong>Email </strong> {{ $client->email }}</p>
            <p class="vote"><strong>Mobile </strong> {{ $client->mobile }}</p>
            <p class="vote"><strong>Website </strong> {{ $client->website or 'No Avail.' }}</p>
            
            
            <div class="action">
             
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="alert"></div>
        <div class="">
          {!! $client->description  !!}
        </div>

<link rel="stylesheet" href="{{ url('user/css/clientgallery.css') }}">


<div class="gallery">

@if($client->images!="")
  @php
    $images=explode("-&",$client->images);
    array_pop($images);
  @endphp
  @foreach($images as $image)
  <figure>
    <img src="{{ url('uploads/'.$image) }}" alt="" />
    <figcaption>{{ $client->name }} <small>{{ $client->email }}</small></figcaption>
  </figure>
  @endforeach
@endif
</div>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <symbol id="close" viewBox="0 0 18 18">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
      S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
      l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
      c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
      s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
  </symbol>
</svg>

      </div>
    </div>
  </div>



	</div>
	
</div>
<!-- //Services -->
@include("user.layout.testimonial")

@stop

@section("js")
<!-- stats -->
	<script src="{{ url('user/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ url('user/js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
<script>
    popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()

</script>
@stop