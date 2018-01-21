 <div class="container">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">OUR PARTNERS</h2>
            <div class="simple-text sm">
             <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Curabitur feugiat feugiat and brane in bibendum sed sollicitudin elit condimentum</p>
            </div>
     </div>
     <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="3" data-md-slides="5" data-lg-slides="5" data-add-slides="5">
          <div class="swiper-wrapper">
              @foreach($partners as $partner)
              <div class="swiper-slide">
                <div class="logo-item hover-circle">
                  <a href="#" class="image circle-point lg">
                      {{ Html::image('assets/img/'.$partner->logo, $partner->name) }}
                  </a>
                </div>
               </div>
               @endforeach
          </div>
          <div class="pagination pagination-style-1 dark bottom-lg"></div>
     </div>
    </div>