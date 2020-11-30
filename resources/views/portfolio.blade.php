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
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k13.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k14.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item--> 
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k12.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h4>Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h4>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k13.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k14.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item--> 
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k12.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h4>Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h4>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k13.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item-->
        
        <div class="col-md-4 bmargin"> <img src="{{asset('images\k14.jpg')}}" alt="" class="img-responsive"/> <br/>
          <h5 class="roboto-slab">Lorem ipsum dolor sit amet sit et justo consectetuer elit. </h5>
          <div class="divider-line solid light"></div>
          <br/>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  
  
@endsection('content')