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
      <img src="http://placehold.it/1920x800" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
  <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Contact</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="index.html">Home</a><i> / </i> Contact</div>
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
        <div class="col-md-8">
          <div class="smart-forms bmargin">
            <h3 class="raleway">Contact Us</h3>
            <br/>
            <br/>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Jhon">
                </div>
              </div>

              <div class="form-group col-md-12">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
             
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="inputState">State</label>
                  <input type="text" class="form-control" id="state">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                
               
              </div>
              <div>
             &nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </form>
          </div>
          <!-- end .smart-forms section --> 
          
        </div>
        <div class="col-md-4 bmargin">
          <h3 class="raleway">Address Info</h3>
          <h6><strong>Company Name</strong></h6>
          No.28 - 63739 street lorem ipsum City, Country <br />
          Telephone: +1 1234-567-89000<br />
          FAX: +1 0123-4567-8900<br />
          <br />
          E-mail: <a href="mailto:email@example.com">email@example.com</a><br />
          Website: <a href="index.html">www.example.com</a>
          <div class="clearfix"></div>
          <br/>
          <h3 class="raleway">Find the Address</h3>
          <div id="map" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
    </div>
 </section>
  <!--end section-->
  
  

@endsection('content')