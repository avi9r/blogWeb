@extends('frontlayout')
@section('title','About')
@section('content')
<section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">We Are SRV Technology</h4>
        <h5 class="text-white uppercase">Get Many More Features</h5>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="{{asset('images\h2.jpg')}}" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>About Us</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="/">Home</a><i> / </i> About Us </div>
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
        <div class="col-md-9 col-centered text-center">
          <h4 class="text-red-5 font-weight-3">WE ARE A SRV TECHNOLOGY COMPANY DEDICATED TO PROVIDING THE EXCELLENT RESULT IN THE SEO, SEM, SOCIAL MEDIA MARKETING, TELEMARKETING AND WEBSITE DESIGN, MOBILE APP DEVELOPMENT.</h4>
        </div>
        <br/>
        <br/>
        <div class="divider-line solid light"></div>
        <br/>
        <br/>
        <br/>
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k12.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h4>Our Mission </h4>
          <div class="divider-line solid light"></div>
          <br/>
          <p>Our mission is to be the top-notch provider of Web Applications, products, services and solutions across the globe that enable and transform the way our customers gather, manage, distribute and communicate information. Our mission statement is the commitment towards our clients which we will always adhere to.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k13.jpg')}}" alt="" class="img-responsive"/> <br/>
        <h4>Our Promise </h4>
          <div class="divider-line solid light"></div>
          <br/>
          <p>We promise to dig deep into the soul of your company and extract enough information so that We can embody your brand, understand your personas, reach your audience and build trust on your behalf.

We also promise is to be there for you so that your brand can be there for your customers whenever, wherever they need you.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k14.jpg')}}" alt="" class="img-responsive"/> <br/>
        <h4>Our Planed Vision </h4>
          <div class="divider-line solid light"></div>
          <br/>
          <p>Currently we are providing 360° Digital Marketing Solution including Website Development, Mobile App Development and all. In the upcoming years we also provide the Complete ATL & BTL Marketing Solution to our clients. And Srv tech will be a Complete Marketing Solution for business</p>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="sec-bpadding-2">
    <div class="container">
      <div class="row">
        <div class="text-box padding-4 section-red-5">
          <blockquote class="style1"><span>
            <h5 class="dosis uppercase text-white">We are a SRV Technology company dedicated to providing the excellent result in the SEO, SEM, Social Media Marketing, Telemarketing and Website Design, Mobile App Development. We are very much passionate about our work, followed by time-bound work which is incorporated with data, so that we can help in your business.

We have a keen knowledge on digital marketing, website development and we focus on the results. The clients we have worked on before gets a personalized experience and we give the value if our clients.</h5>
            </span></blockquote>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="sec-bpadding-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 bmargin">
          <h3>Why Choose Us</h3>
          <div class="divider-line solid light"></div>
          <br/>
          <p>As the industry is very long, we are trying to cater with quality, so that it helps us to stand out from the crowd. Our motto is to cater the quality work and being ahead of the industry. By bearing that in mind, we work on the latest techniques, to give the best results to the clients.

Partaking with the industry, we take every work as challenge and against every work we try to produce good results. So, if you are looking for any digital marketing company in Kolkata, you can contact us without having the second thought in mind. Just give us the challenge and we will return you through work.

We provide all sorts of consultation in the world of digital marketing. We help you to stay at the top of the business world.  We try to increase traffic and create high brand loyalty. We have consultants who can be hired for creating various market strategies to expand the business. We promote the brand through websites, apps, and various social media platforms which in turn helps in generating leads and increase the brand value.</p>
          <br/>
          
        </div>
        <!--end item-->
        
        <div class="col-md-6 col-sm-6 col-xs-12 bmargin">
          <h3>Who We Are</h3>
          <div class="divider-line solid light"></div>
          <br/>
          <div class="margin-top1"></div>
          <div class="video-wrapper">
            <video controls poster="{{asset('images\k3.jpg')}}">
              <source type="video/webm" src="https://codelayers.net/videos/Applead.webm">
              <source type="video/mp4" src="https://codelayers.net/videos/Applead.mp4">
              <source type="video/ogg" src="https://codelayers.net/videos/Applead.ogv">
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
 
  
  
      
@endsection('content')