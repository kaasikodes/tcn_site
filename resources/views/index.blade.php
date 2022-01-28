@extends('layouts.app_main')
@section('title')
  TCN | Home

    
@endsection
@section('content')
  <!-- Start Banner -->
  <div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="pogoSlider" id="js-main-slider" style = "background: #000; padding: 0;">
                <div class="pogoSlider-slide" style="background:linear-gradient(0deg, rgba(2, 0, 10, 0.7), rgba(2, 0, 10, 0.7)),url(https://www.tcn.org.ng/images/demo/slide2.jpg);  object-fit:cover;" >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide_text">
                                    <h3><span span class="theme_color">There is no limit to what you can learn</span><br>Challenge Yourself</h3>
                                  
                                    <br>
                                    <div class="full center">
                    <a class="contact_bt" href="courses.html">Start Learning</a>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" style="background:linear-gradient(0deg, rgba(2, 0, 10, 0.7), rgba(2, 0, 10, 0.7)),url(https://www.tcn.org.ng/images/demo/slide2.jpg);  object-fit:cover;" >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide_text">
                                    <h3><span span class="theme_color">There is no limit to what you can learn</span><br>Challenge Yourself</h3>
                                   
                                    <br>
                                    <div class="full center">
                    <a class="contact_bt" href="courses.html">Start Learning</a>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .pogoSlider -->
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- tabs section -->
<div class="section tabbar_menu">
  <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="tab_menu">
         <ul>
          <li><a href="#"><span class="icon"><img src="images/i1.png" alt="#" /></span><span class = "text">Electrical Maintainance</span></a></li>
          <li><a href="#"><span class="icon"><img src="images/i2.png" alt="#" /></span><span class = "text">Protection, Control & Metering</span></a></li>
          <li><a href="#"><span class="icon"><img src="images/i3.png" alt="#" /></span><span class = "text">System Lines</span></a></li>
          <li><a href="#"><span class="icon"><img src="images/i4.png" alt="#" /></span><span class = "text">System Operations</span></a></li>
          
       </ul>
      </div>
     </div>
   </div>
  </div>
</div>
<!-- end tabs section -->

<!-- welcome section -->
<div class="section margin-top_50">
  <div class="container">
      <div class="row">
          <div class="col-md-6 layout_padding_2">
              <div class="full">
                  <div class="heading_main text_align_left">
         <h2><span>Welcome to the</span> Transmission Learning Platform</h2>
                  </div>
      <div class="full">
        <p>This platform was built to solve the problem of the disconnect of what is taught in the classroom of various nigerian institutions and the work done in the field. The platform bridges the gap between theory and pratice in the field of electrical engineering, specifically transmission.
          The platform does so by allowing users to be able to learn from one another by sharing videos of their experiences on the field, and also creating lectures on various topics. The platform also allows users to submit lecture requests on specific topics. Anyone who is knowledgable in the topic of the lecture request can create a lecture in response to the request. Feel free to contribute to the platform in any way possible, remember the quality of engineers in a nation is dependent on the co-operation of engineers within that nation.</p>
      </div>
      <div class="full">
         <a class="hvr-radial-out button-theme" href="#">Start Learning</a>
      </div>
              </div>
          </div>
  <div class="col-md-6">
              <div class="full">
                  <img src="images/welcome.jpg" alt="welcome" />
              </div>
          </div>
      </div>
  </div>
</div>
<!-- end welcome section -->

<!-- lectures section -->
<div class="section layout_padding">
  <div class="container">
      <div class="row">
        {{-- heading --}}
          <div class="col-md-12">
              <div class="full">
                  <div class="heading_main text_align_center">
                    <h2><span>Recent </span>Lectures</h2>
                  </div>
          </div>

          {{-- content --}}
         <lectures-container home = "true"></lectures-container>


      </div>

      </div>
  </div>
</div>
<!-- end lectures section -->

<!-- videos section -->
<div class="section margin-top_50 silver_bg">
  <div class="container">
      <div class="row">
    <div class="col-md-6">
              <div class="full float-right_img">
                  <img src="images/img6.png" alt="#" />
              </div>
          </div>
          <div class="col-md-6 layout_padding_2">
              <div class="full">
                  <div class="heading_main text_align_left">
         <h2><span>Learn  by Bridging the Gap between Theory and Practice</h2>
                  </div>
      <div class="full">
        <p>The field of electrical engineering is a broad one, and there is much to learn in so little time. And as a result, we often find ourselves in a situation where we are familiar with alot of concepts and theories but have no pratical experience to back up this knowledge. And this is especially a problem in our beloved country Nigeria, as the opportunities for graduates and undergrautes to gain the much needed experience to help cement what they have learnt is limited. 
          This platform aims to solve that problem by providing videos which showcase field work that goes hand in hand with what students have been taught in the classroom. These videos are by no means meant to replace real life field experience. They are to simply serve as a supplement which will help aid students in connecting the dots between what is taught in the classroom and how they are applied in the real world. </p>
      </div>
      <div class="full">
         <a class="hvr-radial-out button-theme" href="#">Watch Videos</a>
      </div>
              </div>
          </div>
</div>
  </div>
</div>
<!-- end videos section -->

<!-- research section -->
<div class="section layout_padding padding_bottom-0">
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="full">
                  <div class="heading_main text_align_left">
         <h2><span>Research</span></h2>
                  </div>
      <div class="full">
        <p>Since the beginning of time, the biggest problem of research has been where do find relevant information. The platform aims to solve that problem by allowing users to post materials and links to relevant material that could very well aid you in your research work. These materials should be used at your discretion. And remeber to give credit where credit is due.</p>
      </div>
      <div class="full">
         <a class="hvr-radial-out button-theme" href="#">See More</a>
      </div>
              </div>
          </div>
  <div class="col-md-6">
              <div class="full">
                  <img class="img-responsive" src="images/img7.png" alt="#" />
              </div>
          </div>
      </div>
  </div>
</div>
<!-- end research section -->

<!--contact section -->
{{-- heading --}}
<div class="section layout_padding padding_bottom-0">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="full">
                  <div class="heading_main text_align_center">
         <h2><span>Contact</span></h2>
                  </div>
      </div>
          </div>
  </div>
     </div>
  </div>

  {{-- content --}}
  <div class="section contact_section" style="background:#12385b;">
    <div class="container">
           <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="full float-right_img">
                    <img src="images/img10.png" alt="#">
                </div>
             </div>
     <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
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
                <textarea placeholder="Massage"></textarea>
             </div>
             <div class="full field">
                <div class="center"><button>Send</button></div>
             </div>
           </fieldset>
        </form>
      </div>
             </div>
           </div>			  
       </div>
    </div>
  

  <!-- end contact section -->

  

    
@endsection