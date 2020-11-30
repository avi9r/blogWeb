@extends('frontlayout')
@section('title','Portfolio')
@section('content')
<section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">We Are SRV Technology</h4>
        <h5 class="text-white uppercase">Get Many More Features</h5>
      </div>
       <div class="overlay bg-opacity-5"></div>
      <img src="http://placehold.it/1920x800" alt="" class="img-responsive"/> 
    </div>
</section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
  <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Portfolio</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="index.html">Home</a><i> / </i> Portfolio</div>
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
          <h4 class="text-red-5 font-weight-3">WE ARE VERY MUCH PASSIONATE ABOUT OUR WORK, FOLLOWED BY TIME-BOUND WORK WHICH IS INCORPORATED WITH DATA, SO THAT WE CAN HELP IN YOUR BUSINESS.</h4>
        </div>
        <br/>
        <br/>
        <div class="divider-line solid light"></div>
        <br/>
        <br/>
        <br/>
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k12.jpg')}}" alt="" class="img-responsive"/> <br/>
        <h5 class="roboto-slab">Specific </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k13.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Attainable </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k14.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Relevant </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item--> 
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k12.jpg')}}" alt="" class="img-responsive"/> <br/>
        <h5 class="roboto-slab">Time Based </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k13.jpg')}}" alt="" class="img-responsive"/> <br/>
        <h5 class="roboto-slab">Effective </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k14.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Affordable </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item--> 
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k12.jpg')}}" alt="" class="img-responsive"/> <br/>
        <h5 class="roboto-slab">Efficient </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k13.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Project Discovery</h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k14.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Strategic </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  
  
@endsection('content')