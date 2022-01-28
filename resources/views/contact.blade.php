@extends('layouts.app_alt')
@section('title')
  TCN | Contact Us

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3>Contact us</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>
      
      <!-- end section -->
      

      <!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Feel free to </span> Contact us</h2>
                        </div>
						<div class="full">
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
						<div class="full">
						   {{-- links social --}}
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <div class="contact_form">
                            <form action="contact.html">
                               <fieldset>
                                   <div class="full field">
                                      <input type="text" placeholder="Your Name" name="your name" />
                                   </div>
                                   <div class="full field">
                                      <input type="email" placeholder="Email Address" name="Email" />
                                   </div>
                                   <div class="full field">
                                      <input type="phn" placeholder="Phone Number" name="Phone number" />
                                   </div>
                                   <div class="full field">
                                      <textarea placeholder="Message"></textarea>
                                   </div>
                                 
                                   <div class="full field">
                                      <div class=""><button class = "hvr-radial-out button-theme">Send</button></div>
                                   </div>
                               </fieldset>
                               
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
    
@endsection

