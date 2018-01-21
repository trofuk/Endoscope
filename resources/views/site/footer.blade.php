<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="footer-item white-color">
				<a href="index.html" class="footer-logo"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
				<h4 class="h4 title">ADDRESS</h4>
				<div class="simple-text">
					<ul>
					@foreach($contacts as $contact) 
                          <p>{!! $contact->address !!}</p>
                    @endforeach
                	</ul>
				</div>
				
				
				
			</div>
		</div>
		<div class="col-md-4">
		    <div class="footer-item  white-color" style="margin-top: 37px;">
		       <h4 class="h4 title">EMAIL</h4>
		         
		        <div class="f-link">
		        	<ul>
		        	@foreach($contacts as $contact) 
                      <li><a href="mailto:">{{ $contact->email }}</a></li>
                    @endforeach
                	</ul>
                </div>
			</div>
		</div>
	    <div class="col-md-4">
		    <div class="footer-item white-color" style="margin-top: 37px;">
		       <h4 class="h4 title">PHONE</h4>
		         <div class="f-link">
		         	<ul>
		         	@foreach($contacts as $contact)
                       <li><a href="tel:">{{ $contact->phone }}</a></li>
                    @endforeach
                	</ul>
                </div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<span>2016 All rights reserved. Developed by <a href="http://electricblaze.com/">ElectricBlaze</a></span>
	</div>
</div>