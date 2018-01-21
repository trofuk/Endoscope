

<!-- CSS -->
<style>
  .accordion-toggle {cursor: pointer;}
  .accordion-content {display: none; box-sizing: content-box; height: 100px;}
  .accordion-content.default {display: block;box-sizing: content-box; height: 100px;}
  .container-faq {min-height: 650px;}

</style>




 <div class="container container-faq">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">faq</h2>
            <div class="simple-text sm">
             <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Curabitur feugiat feugiat and brane in bibendum sed sollicitudin elit condimentum</p>
            </div>
     </div>
     


     <div class="row" id="accordion">
        
    @foreach($faqs as $k => $faq)
        <div class="col-lg-12 col-md-12">

             <h4 class="h4 title accordion-toggle"><span class="circle-point" style="display: inline-block; width: 25px; height: 25px; margin-right: 20px">{{ ($k+1).'.'}}</span>{{ $faq->question }}</h4>
             <div class="service-block hover-circle accordion-content">
                <div class="image lg circle-point " style="width: 100px; height: 100px;">
                    {{ Html::image('assets/img/'.$faq->icon, $faq->question) }}
                </div>
                  <div class="text">
                       {!! $faq->answer !!}
                        
                  </div>
             </div>
        </div>
    @endforeach

     </div>
    </div>
  