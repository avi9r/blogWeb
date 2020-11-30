@extends('frontlayout')
@section('title','Home Page')
@section('content')
<section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">We Are Hasta</h4>
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
          <h4 class="text-red-5 font-weight-3">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orc Cras laoreet ligul Etiam sit amet dolor</h4>
        </div>
        <br/>
        <br/>
        <div class="divider-line solid light"></div>
        <br/>
        <br/>
        <br/>
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k12.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h4>Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h4>
          <div class="divider-line solid light"></div>
          <br/>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum</p>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k13.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h5>
          <div class="divider-line solid light"></div>
          <br/>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum</p>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k14.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h5>
          <div class="divider-line solid light"></div>
          <br/>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum</p>
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
            <h5 class="dosis uppercase text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci.</h5>
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
          <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augu Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam tellus diam volutpat a laoreet vel bibendum</p>
          <br/>
          <ul class="iconlist less-margin orange2">
            <li><i class="fa fa-check"></i> Sed massa tellus aliquam rhoncus venenatis quis. </li>
            <li><i class="fa fa-check"></i> Development dolor sit amet consectetur adipiscing elit Phasellus </li>
            <li><i class="fa fa-check"></i> Etiam dictum Nunc enim Sed massa tellus aliquam rhoncus venenatis</li>
            <li><i class="fa fa-check"></i> Magna eget scelerisque metus massa in neque sit consectetur </li>
            <li><i class="fa fa-check"></i> Development dolor sit amet consectetur elit Phasellus </li>
          </ul>
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