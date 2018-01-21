@if(isset($pages) && is_object($pages))
@foreach($pages as $k => $page)
			@if($k%2 == 0)
<div class="top-baner swiper-anime arrow-closest" id="{{ $page->alias }}">
<div class="swiper-container top-slider" data-autoplay="0" data-loop="0" data-speed="600" data-center="0" data-slides-per-view="1">
	<div class="swiper-wrapper">
	   <div class="swiper-slide first-slide" data-val="0">
		  <div class="block-bg">
		      <div class="bg-wrap">
			     <div class="bg" style="background-image:url({{ asset( 'assets/img/'.$page->image_1) }})"></div>
			       <div class="black-layer"></div>
			  </div>
			  <div class="slider-caption vertical-align white-color">
			     <div class="container">
			  	    
			  	    {!! $page->text_1!!}

			  	    <a href="{{ route('page', array('alias' => 'about' )) }}" class="link-style-1 bg-w" ><span>learn more</span></a><!--  or "#{{ 'about' }}"  -->
			  	 </div>
			  </div>
		  </div>
	   </div>
	   <div class="swiper-slide" data-val="1">
		  <div class="block-bg">
		      <div class="bg-wrap">
			     <div class="bg" style="background-image:url({{ asset('assets/img/'.$page->image_2) }})"></div>
			       <div class="black-layer"></div>
			  </div>
			  <div class="slider-caption vertical-align white-color">
			     <div class="container">
			  	    
			  	    {!! $page->text_2!!}

			  	    <a href="{{ route('page', array('alias' => $page->alias)) }}" class="link-style-1 bg-w"><span>learn more</span></a>
			  	  </div>
			  </div>
		  </div>
	   </div>
	   <div class="swiper-slide" data-val="2">
		  <div class="block-bg">
		      <div class="bg-wrap">
			     <div class="bg" style="background-image:url({{ asset('assets/img/'.$page->image_3) }})"></div>
			       <div class="black-layer"></div>
			  </div>
			  <div class="slider-caption vertical-align white-color">
			     <div class="container">
			  	    
			  	    {!! $page->text_3!!}

			  	    <a href="{{ route('page', array('alias' => $page->alias)) }}" class="link-style-1 bg-w"><span>learn more</span></a>
			  	  </div>
			  </div>
		  </div>
	   </div>
	</div>
	<div class="pagination hidden pagination-style-1"></div>
	<div class="swiper-arrow-wrap">
		<div class="swiper-arrow-left swiper-arrow hover-circle"><span class="circle-point"><img src="{{ asset('assets/img/prev_arrow.png') }}" alt=""></span></div>
		<div class="swiper-arrow-right swiper-arrow hover-circle"><span class="circle-point"><img src="{{ asset('assets/img/next_arrow.png') }}" alt=""></span></div>
	</div>
 </div>
 </div>
	@endif     

@endforeach
@endif 