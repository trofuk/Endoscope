@if(isset($pages) && is_object($pages))
@foreach($pages as $k => $page)
      @if($k%2 == 1)
 <section class="section bg-grey" id="{{ $page->alias }}">
 <div class="container">
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
                    <a href="{{ route('page', array('alias' => $page->alias)) }}" class="link-style-1"><span>read more</span></a>
               </div>
        </div>
    </div>
  </section>
  @endif     

@endforeach
@endif
 