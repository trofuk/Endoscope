<section>
    <div class="container" style="position: relative; top: 100px; z-index: 2;">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">{{ $page->name }}</h2>
            <div class="simple-text sm">
             <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Curabitur feugiat feugiat and brane in bibendum sed sollicitudin elit condimentum</p>
            </div>
     </div>
        <div class="benefit-block">
               <div class="bg" style="background-image:url({{ asset('assets/img/'.$page->image_1) }})"></div>
               <div class="col-wh-50 text">
                    {!! $page->text_1 !!}
                    
               </div>
              
                  
        </div>
        {!! link_to(route('about'), 'Back') !!}
    </div>
</section>