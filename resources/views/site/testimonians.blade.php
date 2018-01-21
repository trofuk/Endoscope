<div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url({{ asset('assets/img/testimonians_bg.jpg') }})"></div>
<div class="black-layer"></div>
 <div class="container-fluid">
     <div class="section-caption white-color">
          <h2 class="h2 caption-stye-1 type-1">TESTIMONIANS</h2>
            <div class="simple-text sm">
             <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Curabitur feugiat feugiat and brane in bibendum sed sollicitudin elit condimentum</p>
            </div>
     </div>
     <div class="swiper-container testi-slider slide-max-width click-point" data-autoplay="0" data-loop="0" data-speed="600" data-center="1" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="3">
          <div class="swiper-wrapper">
            @foreach($testimonians as $k => $testimonian)
              <div class="swiper-slide" data-val="{{ $k }}">
                <div class="testi-block hover-circle">
                  <div class="text">
                       <div class="simple-text">
                         <i>“</i>
                            <p>{!! $testimonian->text !!}</p>
                         <i>”</i>     
                       </div>    
                  </div>
                  <div class="people vertical-align">
                        <div class="image circle-point lg">
                            {{ Html::image('assets/img/'.$testimonian->images, $testimonian->name) }}
                        </div>
                       <h4 class="h4 title">{{ $testimonian->name }}</h4>
                       <div class="sub-title">{{ $testimonian->position }}</div>    
                  </div>
                </div>
               </div>
            @endforeach   
          </div>
        <div class="pagination pagination-style-1 hidden dark bottom-lg"></div>
     </div>
    </div>