 
@foreach($products as $k => $product)
 <div class="popup popup-index-{{ $k + 11 }}">
  <div class="close-popup"><span>X</span></div>
 	<div class="table-align">
        <div class="row-view">
	       <div class="cell-view">
            <div class="tabs-wrap">

            
            

            <div class="tab-content link-tab-1 active">
              <div class="slider-with-preview">
			   <div class="container max-320-mob">
				 <div class="detail-desc white-color">
				   <div class="row">
					  <div class="col-md-12">
						<h2 class="h2 title">infinity project {{ $k + 11 }}</h2>
						<div class="col-md-4">
							<div class="f-link"><b>type: </b><span>{{ $product->type }}</span></div>
							<div class="f-link"><b>Author: </b><a href="#">{{ $product->model }}</a></div>
						</div>
						<div class="col-md-8">
							<div class="simple-text">
								<p>{!! $product->description !!}</p>
							</div>
						</div>
					 </div>
				   </div>
				  </div> 
				   <div class="swiper-container main-detail-slider" data-autoplay="0" data-loop="0" data-speed="600" data-center="0" data-slides-per-view="1">
					   <div class="swiper-wrapper">
						 <div class="swiper-slide swiper-slide-visible swiper-slide-active active" data-val="0">
							  <div class="portfolio-slide">
							  	
							  	{{ Html::image('assets/img/products/'.$product->image_1, $product->name) }}	
								  
							  </div> 
						 </div>
						 <div class="swiper-slide" data-val="1">				      
							  <div class="portfolio-slide">
							  	
							  	{{ Html::image('assets/img/products/'.$product->image_2, $product->name) }}
								 
							  </div> 
						 </div>
						 <div class="swiper-slide" data-val="2">
							  <div class="portfolio-slide">
							  	
							  	{{ Html::image('assets/img/products/'.$product->image_3, $product->name) }}
								  
							  </div> 
						 </div>
						 <div class="swiper-slide" data-val="3">
							  <div class="portfolio-slide">
							  	
							  	{{ Html::image('assets/img/products/'.$product->image_4, $product->name) }}
								  
							  </div> 
						 </div>
					   </div>
					   <div class="pagination pagination-style-1 hidden"></div>
				   </div>
				</div>

			   <div class="container">
			   <div class="preview-slider-wrap padd-bott">
				<div class="swiper-container preview-slider" data-autoplay="0" data-loop="0" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
				    <div class="swiper-wrapper">    
				       <div class="swiper-slide">
				          <div class="prev-img active" data-val="0">
							
							{{ Html::image('assets/img/products/'.$product->image_1, $product->name) }}
	          	 
				          </div>
					   </div>
					   <div class="swiper-slide">
				          <div class="prev-img" data-val="1">

				          	{{ Html::image('assets/img/products/'.$product->image_2, $product->name) }}
				          	 
				          </div>
					   </div>
					   <div class="swiper-slide">
				          <div class="prev-img" data-val="2">

				          	{{ Html::image('assets/img/products/'.$product->image_3, $product->name) }}
				          	 
				          </div>
					   </div>
					   <div class="swiper-slide">
				          <div class="prev-img" data-val="3">

				          	{{ Html::image('assets/img/products/'.$product->image_4, $product->name) }}
				          	 
				          </div>
					   </div>
					</div>
					<div class="pagination pagination-style-1 hidden"></div>
				 </div>
			   </div>	 
             </div>
             </div> 
            </div>
			
		
	


           </div>  
	       </div>
		</div>
	</div>
 </div>

@endforeach
 

 