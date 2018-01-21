 <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url({{ asset('assets/img/contact_bg.jpg') }})"></div>
  <div class="black-layer"></div>
  <div class="container">
   <div class="section-caption white-color">
        <h2 class="h2 caption-stye-1 type-1">do you have any questions</h2>
          <div class="simple-text sm">
             <p>Donec id justo arcu. Nullam euismod facilisis lectus eu imperdiet. In nec suscipit sapien. Aenean sit amet malesuada felis. In dignissim purus tincidunt lectus pretium, a interdum leo egestas. Nam in venenatis est, sed consequat massa</p>
          </div>
   </div>
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
           <div class="contact-block">
                <div class="contact-item">
                     <h4 class="h4 title">address</h4>
                       <ul>
                          @foreach($contacts as $contact) 
                          {!! $contact->address !!}
                          @endforeach
                       </ul>
                </div>
                <div class="contact-item">
                     <h4 class="h4 title">e-mail</h4>
                     @foreach($contacts as $contact) 
                      <a href="mailto:">{{ $contact->email }}</a>
                     @endforeach
                </div>
                <div class="contact-item">
                     <h4 class="h4 title">phone</h4>
                     @foreach($contacts as $contact)
                       <a href="tel:">{{ $contact->phone }}</a>
                     @endforeach
                </div>
                <form action="{{ route('contact') }}" method="POST" name="contactform" class="contact-form" id="contact-form">
                     <h4 class="h4 title">do you have any question?</h4>
                     <div class="input-field col-wh-50">
                           <input placeholder="Name" name="name">
                           <span></span>
                      </div>
                      <div class="input-field col-wh-50">
                           <input placeholder="E-mail" name="email" > 
                           <span></span>
                      </div>
                      <div class="input-field col-wh-50">
                           <input placeholder="Phone" name="phone" > 
                           <span></span>
                      </div>
                      <div class="input-field">
                           <input placeholder="Text" name="text">
                           <span></span>
                      </div>
                      <button type="submit" class="link-style-1 submit"><span>send message</span></button>
                      

                     
                   {{ csrf_field() }}

                </form>

              <div class="success">
                 <div class="table-align">
                 <div class="row-view">
                      <div class="cell-view">
                         <div class="thanks">
                          <div class="close-popup"><span>X</span></div> 
                            <h4 class="h4 title">Your message was sent successfully</h4>
                              <div class="simple-text">
                               <p>Duis commodo risus et magna suscipit aliquam. Curabitur gravida efficitur purus. Pellentesque finibus neque sit amet justo volutpat tincidunt enim id turpis feugiat</p>
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