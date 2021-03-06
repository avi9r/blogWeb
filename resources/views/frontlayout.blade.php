<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="{{asset('js/bootstrap/bootstrap.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('js/mainmenu/menu.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/default.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/layouts.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/shortcodes.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" media="screen" href="{{asset('css/responsive-leyouts.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('js/masterslider/style/masterslider.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/Simple-Line-Icons-Webfont/simple-line-icons.css')}}" media="screen" />
<link rel="stylesheet" href="{{asset('css/et-line-font/et-line-font.css')}}">
<link rel="stylesheet" href="{{asset('js/jFlickrFeed/style.css')}}" />



<!-- Remove the below comments to use your color option -->
<!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
<!--<link rel="stylesheet" href="css/colors/orange.css" />-->
<!--<link rel="stylesheet" href="css/colors/green.css" />-->
<!--<link rel="stylesheet" href="css/colors/pink.css" />-->
<!--<link rel="stylesheet" href="css/colors/red.css" />-->
<!--<link rel="stylesheet" href="css/colors/purple.css" />-->
<!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
<!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
<!--<link rel="stylesheet" href="css/colors/violet.css" />-->
<!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
<!--<link rel="stylesheet" href="css/colors/mossgreen.css" />-->

</head>

<body>
<div class="site_wrapper">
  <div class="topbar dark topbar-padding">
    <div class="container">
      <div class="topbar-left-items">
        <ul class="toplist toppadding pull-left paddtop1">
          <li class="rightl">Customer Care</li>
          <li>(888) 123-4567</li>
        </ul>
      </div>
      <!--end left-->
      
      <div class="topbar-right-items pull-right">
        <ul class="toplist toppadding">
          <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          @guest
          <li><a href="{{url('login')}}" class=" btn btn-red-4 less-top-bottom-padding btn-round btn-small-2">Login</a></li>
          <li><a href="{{url('register')}}" class=" btn btn-red-4 less-top-bottom-padding btn-round btn-small-2">Register</a></li>
          @else
          <li class="nav-item">
		        <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{url('logout')}}">Logout</a>
		      </li>
		      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            	</form>
		      @endguest
        
        </ul>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  
  <div id="header">
    <div class="container-fluid nopadding">
      <div class="navbar red-4 navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <div class="logo-box"><a href="{{ route('blog.home') }}" class="navbar-brand less-top-padding"><img src="images/logo.png" alt=""/></a></div>
        </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav red-4 navbar-nav">
            <li><a href="{{route('blog.home')}}" class="dropdown-toggle active">Home</a></li>
            <li><a href="{{url('blog')}}" class="dropdown-toggle">Blog</a></li>
            <li><a href="{{url('about')}}" class="dropdown-toggle">About</a></li>
            <li><a href="{{url('services')}}" class="dropdown-toggle">Services</a></li>
            <li><a href="{{url('portfolio')}}" class="dropdown-toggle">Portfolio</a></li>
            <li><a href="{{url('contact')}}" class="dropdown-toggle">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>
  
  @yield('content')
  <section class="section-red-5 section-less-padding clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clientlogo-list">
            <li><img src="{{url('images\a1.png')}}" alt=""/></li>
            <li><img src="{{url('images\a2.png')}}" alt=""/></li>
            <li><img src="{{url('images\a3.png')}}" alt=""/></li>
            <li><img src="{{url('images\a4.png')}}" alt=""/></li>
            <li><img src="{{url('images\a5.png')}}" alt=""/></li>
            <li><img src="{{url('images\a6.jpg')}}" alt=""/></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--end section -->
  <div class="clearfix"></div>
  
  <section class="section-fulldark sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3">Recent Posts</h4>
            <div class="footer-title-bottomstrip"></div>
            <div class="clearfix"></div>
            <div class="image-left"><img src="{{url('images\a7.jpg')}}" alt=""/></div>
            <div class="text-box-right">
              <h6 class="text-white less-mar3 nopadding"><a href="#">iPhone boom</a></h6>
              <p>Apple launching new iphone</p>
              <div class="footer-post-info"> <span>By John Doe</span><span>May 19</span> </div>
            </div>
            <div class="divider-line solid dark opacity-4 margin"></div>
            <div class="clearfix"></div>
            <div class="image-left"><img src="{{url('images\a8.jpg')}}" alt=""/></div>
            <div class="text-box-right">
              <h6 class="text-white less-mar3"><a href="#">Headphones</a></h6>
              <p>New sonic bass boasted headphones</p>
              
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3">quick links</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links">
            <li><a href="{{url('blog')}}"><i class="fa fa-angle-right"></i> Blog</a></li>
            <li><a href="{{url('about')}}"><i class="fa fa-angle-right"></i> About Us</a></li>
            <li><a href="{{url('services')}}"><i class="fa fa-angle-right"></i> Services</a></li>
            <li><a href="{{url('posrfolio')}}"><i class="fa fa-angle-right"></i> Portfolio</a></li>
            <li><a href="{{url('contact')}}"><i class="fa fa-angle-right"></i> Contact Us</a></li>
          </ul>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3">Newsletter</h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <div class="newsletter">
              <p>The best motherboard will make sure you really reach the full potential of your build and to get the best performance from all your components.</p>
              <br />
              <form method="get" action="index.html">
                <input class="email_input dark" name="samplees" id="samplees" value="E-mail Address" onFocus="if(this.value == 'E-mail Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'E-mail Address';}" type="text">
                <input name="submit" value="Go" class="input_submit dark" type="submit"/>
              </form>
            </div>
            <div class="margin-top3"></div>
            <ul class="social-icons-3 dark-2">
              <li><a class="twitter" href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3">Flicke Feed</h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <ul id="basicuse" class="thumbs">
            </ul>
          </div>
        </div>
        
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="section-copyrights sec-moreless-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <span>Copyright © 2020 SRV Technology | All rights reserved.</span></div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <a href="#" class="scrollup red-5"></a><!-- end scroll to top of the page--> 
</div>
<!-- end site wraper --> 

<!-- ============ JS FILES ============ -->
 
<script type="text/javascript" src="{{asset('js/universal/jquery.js')}}"></script> 
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/jFlickrFeed/jflickrfeed.min.js')}}"></script> ')}}
<script src="{{asset('js/jFlickrFeed/jquery.cycle.all.min.js')}}"></script> 
<script src="{{asset('js/masterslider/jquery.easing.min.js')}}"></script> 
<script src="{{asset('js/masterslider/masterslider.min.js')}}"></script> 
<script type="text/javascript">
(function($) {
 "use strict";
	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');
	
	slider.setup('masterslider' , {
		 width:1600,    // slider standard width
		 height:630,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"parallaxMask"
	});

})(jQuery);
</script> 
<script>
$('#basicuse').jflickrfeed({
limit: 6,
qstrings: {
id: '133294431@N08'
},
itemTemplate: 

});
</script> 
<script src="{{asset('js/mainmenu/customeUI.js')}}  "></script> 
<script type="text/javascript" src="{{asset('js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script> 
<script src="{{asset('js/scrolltotop/totop.js')}} "></script> 
<script src="{{asset('js/mainmenu/jquery.sticky.js')}}  "></script> 
<script type="text/javascript" src="{{asset('js/cubeportfolio/main.js')}}"></script>
<script src="{{asset('js/scripts/functions.js')}} " type="text/javascript"></script>
</body>
</html>