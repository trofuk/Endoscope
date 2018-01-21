<div class="container">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">Specialization</h2>
            <div class="simple-text sm">
             <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Curabitur feugiat feugiat and brane in bibendum sed sollicitudin elit condimentum</p>
            </div>
     </div>
     <div class="row">
      @foreach($services as $k => $service)
        <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="service-item hover-circle">
                  <div class="image circle-point lg"><img src="{{ asset('assets/img/'.$service->icon) }}" alt=""></div>
                  <h4 class="h4  title">{{$service->name}}</h4>
                    <div class="simple-text">
                        <p>{{$service->text}}</p>
                    </div>
             </div>
        </div>
      @endforeach
    </div>
   </div>
