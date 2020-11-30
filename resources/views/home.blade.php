@extends('frontlayout')
@section('title','Home Page')
@section('content')
		  
  <!-- masterslider -->
  <div class="master-slider ms-skin-default" id="masterslider"> 
    
    <!-- slide 1 -->
    <div class="ms-slide slide-1" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="{{asset('images\slider3.jpg')}}" data-src="{{asset('images\slider3.jpg')}}" alt=""/>
      
      <h3 class="ms-layer text38"
			style="top: 210px; left:230px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> get excellent features</h3>
            
      <h3 class="ms-layer text39"
			style="top:250px; left:230px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> welcome to SRV Technology</h3>
            
      <h3 class="ms-layer text3"
			style="top: 310px; left:230px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)">Let’s Build Your Business Together!<br/>
      We empower businesses through technologies that drive their commerce and growth.</h3>
        
      <a class="ms-layer sbut16"
			style="left: 230px; top: 380px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Read more </a> 
            
            </div>
    <!-- end slide 1 --> 
    
    <!-- slide 2 -->
    <div class="ms-slide slide-2" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="{{asset('images\slider1.jpg')}}" data-src="{{asset('images\slider1.jpg')}}" alt=""/>
      
      <h3 class="ms-layer text38 text-center"
			style="top: 210px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"> get excellent features</h3>
            
      <h3 class="ms-layer text39"
			style="top:250px; left:230px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> welcome to SRV Technology</h3>
            
      <h3 class="ms-layer text3"
			style="top: 310px; left:230px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)">Let’s Build Your Business Together!<br/>
      We empower businesses through technologies that drive their commerce and growth.</h3>
     
      <a class="ms-layer sbut16"
			style="left: 740px; top: 380px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Read more </a> 
            
            </div>
    <!-- end slide 2 -->
    
    <!-- slide 3 -->
    <div class="ms-slide slide-3" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="{{asset('images\slider2.jpg')}}" data-src="{{asset('images\slider2.jpg')}}" alt=""/>
      
      <h3 class="ms-layer text38 text-center"
			style="top: 210px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"> Welcome to SRV Technology</h3>
            
      <h3 class="ms-layer text39 text-center"
			style="top:250px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> We Are Digital Agency</h3>
                  
      <h3 class="ms-layer text3"
			style="top: 310px; left:230px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)">Let’s Build Your Business Together!<br/>
      We empower businesses through technologies that drive their commerce and growth.</h3>
      
      <a class="ms-layer sbut16"
			style="left: 740px; top: 380px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Read more </a> 
            
            </div>
    <!-- end slide 3 -->
    
  </div>
  <!-- end of masterslider -->
  <div class="clearfix"></div>
  
  <section class="section-red-5 sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="item-holder marginbottom">
            <div class="icon-plain-small left white"><span class="icon-layers"></span></div>
            <div class="text-box-right less-padding-1">
              <h4 class="text-white">Graphic Design</h4>
              <p class="text-white">Graphic design matters a lot. A company’s image can heavily on their graphical elements. </p>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="item-holder marginbottom">
            <div class="icon-plain-small left white"><span class="icon-pricetags"></span></div>
            <div class="text-box-right less-padding-1">
              <h4 class="text-white">Logo Design</h4>
              <p class="text-white">Get The Best Logo Design For Your Business. We Provide Logo Design Services at Affordable Rate.  </p>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="item-holder marginbottom">
            <div class="icon-plain-small left white"><span class="icon-alarmclock"></span></div>
            <div class="text-box-right less-padding-1">
              <h4 class="text-white">Web Development</h4>
              <p class="text-white">We offer the best and most convenient solutions for your business's growth. SRV tech is leading company in Siliguri </p>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="item-holder marginbottom">
            <div class="icon-plain-small left white"><span class="icon-tools"></span></div>
            <div class="text-box-right less-padding-1">
              <h4 class="text-white">Branding</h4>
              <p class="text-white">Branding is about seizing every opportunity to express why people should choose one brand over another.</p>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="item-holder marginbottom">
            <div class="icon-plain-small left white"><span class="icon-map"></span></div>
            <div class="text-box-right less-padding-1">
              <h4 class="text-white">Visual Design</h4>
              <p class="text-white">Visual design is the use of imagery, color, shapes, typography, and form to enhance usability and improve the user experience. </p>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="item-holder marginbottom">
            <div class="icon-plain-small left white"><span class="icon-chat"></span></div>
            <div class="text-box-right less-padding-1">
              <h4 class="text-white">Support</h4>
              <p class="text-white">Customer support is the range of services we offer to help our customers get the most out of your product and to resolve their problems. </p>
            </div>
          </div>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class=" section-light section-side-image clearfix">
    <div class="img-holder col-md-6 col-sm-3 pull-left">
      <div class="background-imgholder" style="background:url(https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
       <img class="nodisplay-image" src="{{asset('images\project.jpg')}}" alt=""/> </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-md-offset-7 col-sm-8 col-sm-offset-4 text-inner clearfix align-left">
          <div class="text-box">
            <h3 class="uppercase">Project Name</h3>
            <div class="title-line-4 less-margin"></div>
            <div class="clearfix"></div>
            <p class="sub-title-left">Smart AI<span class="text-red-5">consectetuer adipiscing elit</span> Suspendisse et justo Praesent mattis commodo augue.</p>
            <ul class="iconlist red-5">
              <li><i class="fa fa-arrow-circle-right"></i> It can solve logical problems.</li>
              <li><i class="fa fa-arrow-circle-right"></i> Speach recognition with talk back function. </li>
              <li><i class="fa fa-arrow-circle-right"></i> React according to once mood. </li>
            </ul>
            <br/>
            <br/>
            <a href="#" class="btn btn-border red-5">Read more</a> </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class=" clearfix"></div>
  
  <section class="sec-tpadding-2">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase">About Us</h3>
          <div class="title-line-4 less-margin align-center"></div>
          <p class="sub-title-2">Lorem ipsum dolor sit amet consectetuer adipiscing elit.</p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-8"> <img src="{{asset('images\about.jpg')}}" alt="" class="img-responsive"/> </div>
        <!--end item-->
        
        <div class="col-md-4">
          <div class="text-box dark padding-4">
            <h4 class="uppercase text-white">Our History</h4>
            <div class="title-line-4 white less-margin"></div>
            <div class="clearfix"></div>
            <p>Our mission is to be the top-notch provider of Web Applications, products, services and solutions across the globe that enable and transform the way our customers gather, manage, distribute and communicate information. Our mission statement is the commitment towards our clients which we will always adhere to.</p>
            <br/>
            <br/>
            <a class="btn btn-red-5" href="#">Read more</a> </div>
        </div>
        <!--end item--> 
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="section-red-5 section-less-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3 class="less-mar3 uppercase text-white">Beautiful Many More Layouts</h3>
        </div>
        
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase">Our Services</h3>
          <div class="title-line-4 less-margin align-center"></div>
          <p class="sub-title-2">Get our best and affordable services.</p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="col-md-6">
            <div class="feature-box70 bmargin">
              <div class="icon-plain-small left white"><span class="icon-tools"></span></div>
              <div class="text-box-right text-left less-padding-1">
                <h4 class="text-white">Graphic Design</h4>
                <p>Graphic design matters a lot. A company’s image can heavily on their graphical elements.</p>
              </div>
            </div>
          </div>
          <!--end item-->
          
          <div class="col-md-6">
            <div class="feature-box70 active bmargin">
              <div class="icon-plain-small left white"><span class="icon-lightbulb"></span></div>
              <div class="text-box-right text-left less-padding-1">
                <h4 class="text-white">Branding</h4>
                <p>Branding is about seizing every  express why people should choose one brand over another. </p>
              </div>
            </div>
          </div>
          <!--end item-->
          <div class="col-divider-margin-3"></div>
          <div class="col-md-6">
            <div class="feature-box70 bmargin">
              <div class="icon-plain-small left white"><span class="icon-basket"></span></div>
              <div class="text-box-right text-left less-padding-1">
                <h4 class="text-white">Visual Design</h4>
                <p>We offer the best and most convenient solutions for your business's growth. </p>
              </div>
            </div>
          </div>
          <!--end item-->
          
          <div class="col-md-6">
            <div class="feature-box70 bmargin">
              <div class="icon-plain-small left white"><span class="icon-chat"></span></div>
              <div class="text-box-right text-left less-padding-1">
                <h4 class="text-white">Marketing</h4>
                <p>the action or business of promoting and selling products or services.</p>
              </div>
            </div>
          </div>
          <!--end item--> 
          
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <h5>We provide</h5>
          <br/>
          <ul class="iconlist dark">
            <li><i class="fa fa-arrow-circle-right"></i> complete digital growth for your business.</li>
            <li><i class="fa fa-arrow-circle-right"></i> Website Design Services.</li>
            <li><i class="fa fa-arrow-circle-right"></i> Mobile App Development. </li>
            <li><i class="fa fa-arrow-circle-right"></i> e-commerce Marketing Services</li>
            <li><i class="fa fa-arrow-circle-right"></i> Visual Design services. </li>
          </ul>
          <br>
          <a class="btn btn-border red-5" href="#">Read more</a> </div>
        <!--end item--> 
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="parallax-section54">
    <div class="section-overlay bg-opacity-4">
      <div class="container sec-tpadding-3 sec-bpadding-3">
        <div class="row">
          <div class="col-md-6">
            <div class="feature-box71">
              <h4 class="uppercase text-white">100% Responsive</h4>
              <div class="title-line-4 white less-margin"></div>
              <div class="clearfix"></div>
              <p>Lorem ipsum dolor sit amet, sit et <span class="text-red-5">justo consectetuer adipiscing elit.</span> et sit Suspendisse et justo. Praesent mattis.Lorem ipsum dolor sit amet.</p>
              <br/>
              <p>Lorem ipsum dolor sit amet, sit et justoconsectetuer adipiscing elit.  et sit Suspendisse et justo. Praesent mattis.Lorem ipsum dolor sit amet.</p>
              <br/>
              <a class="btn btn-red-5" href="#">Read more</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase">Meet our Team</h3>
          <div class="title-line-4 less-margin align-center"></div>
          <p class="sub-title-2">We Couldn’t Do It Without Them</p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-3 col-sm-6">
          <div class="team-holder2 two bmargin">
            <div class="img-holder">
              <div class="icon-box text-center">
                <ul class="social-icons-1">
                  <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="{{asset('images\p1.jpg')}}" alt="" class="img-responsive"/> </div>
            <div class="content-box less-pading text-center">
              <h5 class="nomargin title">Charlotte</h5>
              <h6 class="text-red-5 nopadding">Founder</h6>
              <br/>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6">
          <div class="team-holder2 two bmargin">
            <div class="img-holder">
              <div class="icon-box text-center">
                <ul class="social-icons-1">
                  <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="{{asset('images\p2.jpg')}}" alt="" class="img-responsive"/> </div>
            <div class="content-box less-pading text-center">
              <h5 class="nomargin title">William</h5>
              <h6 class="text-red-5 nopadding">Manager</h6>
              <br/>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6">
          <div class="team-holder2 two active bmargin">
            <div class="img-holder">
              <div class="icon-box text-center">
                <ul class="social-icons-1">
                  <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="{{asset('images\p3.jpg')}}" alt="" class="img-responsive"/> </div>
            <div class="content-box less-pading text-center">
              <h5 class="nomargin title">Olivia</h5>
              <h6 class="text-red-5 nopadding">Support</h6>
              <br/>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6">
          <div class="team-holder2 two bmargin">
            <div class="img-holder">
              <div class="icon-box text-center">
                <ul class="social-icons-1">
                  <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="{{asset('images\p4.jpg')}}" alt="" class="img-responsive"/> </div>
            <div class="content-box less-pading text-center">
              <h5 class="nomargin title">Alexander</h5>
              <h6 class="text-red-5 nopadding">Marketing</h6>
              <br/>
            </div>
          </div>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class=" section-light section-side-image clearfix">
    <div class="img-holder col-md-6 col-sm-3 pull-left">
      <div class="background-imgholder" style="background:url(https://images.unsplash.com/photo-1497215842964-222b430dc094?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);"> <img class="nodisplay-image" src="http://placehold.it/1500x960" alt=""/> </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-md-offset-7 col-sm-8 col-sm-offset-4 text-inner clearfix align-left">
          <div class="text-box">
            <h3 class="uppercase">Why Choose Us</h3>
            <div class="title-line-4 less-margin"></div>
            <div class="clearfix"></div>
            <div class="col-md-6 col-xs-12">
              <div class="item-holder">
                <div class="icon-plain-small left"> <span class="icon-layers"></span></div>
                <div class="text-box-right less-padding-1">
                  <h5>Efficiency</h5>
                  <p>Our hardworking and highly energetic team will work around your project and will try to improvise it as far as possible.</p>
                </div>
              </div>
            </div>
            <!--end item-->
            
            <div class="col-md-6 col-xs-12">
              <div class="item-holder">
                <div class="icon-plain-small left"> <span class="icon-basket"></span></div>
                <div class="text-box-right less-padding-1">
                  <h5>Reliability</h5>
                  <p>We intend to build a certain relationship with our clients which are a great combination of professionalism, friendliness and  trust.</p>
                </div>
              </div>
            </div>
            <!--end item-->
            <div class="clearfix"></div>
            <br/>
            <br/>
            <a class="btn btn-border red-5" href="#">Read more</a></div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class=" clearfix"></div>
  
  <section class="section-red-5 section-less-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3 class="less-mar3 uppercase text-white">Beautiful Many More Layouts</h3>
        </div>
        <div class="col-md-3">
          <div class="margin-top2"></div>
          <a class="btn btn-border white btn-large pull-right" href="#">Read more</a> </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-7 bmargin">
          <h3>LET'S WORK TOGETHER</h3>
          <p>SRV Technology Digital Marketing Solution For Business located in Kolkata, India. We offer complete solutions to clients like web development, SEO, SMM, PPC, Video Marketing, Facebook Applications, Reputation Management & more.</p>
          <br/>
          <p>Working with us would give you immense exposure on all the activities and our innovative and client centric approach would give you better understanding & hands on experience on digital strategies.</p>
          <br/>
          <br/>
          <a class="btn btn-border red-5" href="#">Join Us</a> </div>
        <!--end item-->
        
        <div class="col-md-5 bmargin"> <img src="{{asset('images\feature.jpg')}}" alt="" class="img-responsive"/> </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="parallax-section54">
    <div class="section-overlay light bg-opacity-4">
      <div class="container">
        <div class="row">
          
          <!--end item-->
          
          
            <div class="feature-box72 bmargin text-center active">
            
              <div class="divider-line solid dark less-width-8 align-center opacity-2"></div>
              <br/>
              <h1 class="uppercase">Our Happy Clients</h1>
            </div>
         
          <!--end item-->
          
          
          
        </div>
      </div>
    </div>
  </section>
  
  <!--end section-->
  <div class="clearfix"></div>

@endsection('content')