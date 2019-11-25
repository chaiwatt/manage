
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<!-- Meta info begin-->
<title>ไอแมคจินตคณิต</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robots" content="index, follow" />
<!-- Meta info end-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/default.css')}}" />
<link rel="shortcut icon"  href="{{asset('assets/img/favicon.ico')}}" />
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/Museo.font.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/Museo_Sans.font.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/supersized.3.1.3.core.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/superfish-compile.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.tweet.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/p2.js')}}"></script>
<!-- Form verification -->
<script type="text/javascript" src="{{asset('assets/js/jquery.form.js')}}"></script>
</head>
<body>
<div id="content-wrapper"> 
	
	<!-- Container begin -->
	<div id="container"> 
		<!-- Header begin-->
		<div id="header" class="clearfix">
			<div id="logo" > <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="logo" /></a> </div>
			
			<!-- Navigation start -->
			<ul class="sf-menu">
				<li> <a href="#">Pages</a>
					<ul>
						<li> <a href="about.html">About</a></li>
						<li> <a href="blog-1.html">Blog 1</a></li>
						<li> <a href="blog-2.html">Blog 2</a></li>
						<li> <a href="contact.html">Contact</a></li>
						<li> <a href="search.html">Search</a></li>
						<li> <a href="testimonials.html">Testimonials</a></li>
					</ul>
				</li>
				<li><a href="#">Samples</a>
					<ul>
						<li> <a href="element.html">Element</a></li>
						<li> <a href="grid.html">Grid</a></li>
						<li> <a href="full-width.html">Full Width</a></li>
						<li> <a href="single.html">Single</a> </li>
					</ul>
				</li>
				<li> <a href="#">Gallery</a>
					<ul>
						<li> <a href="gallery-1.html">Gallery 1</a></li>
						<li> <a href="gallery-2.html">Gallery 2</a></li>
						<li> <a href="gallery-3.html">Gallery 3</a></li>
					</ul>
				</li>
				<li><a href="colors.html">Colors</a></li>
				<li> <a href="landing.html">Landing page</a></li>
			</ul>
			<!-- Navigation end --> 
		</div>
		<!-- Header end --> 
		
	
		<div id="main" class="round_8 clearfix">

            
            @yield('content')
		</div>
	
		<!-- Footer begin -->
		<div id="footer" class="round_8 clearfix">
			<div class="col_201">
				<h4 class="replace">Latest News</h4>
				<ul class="bullet-list">
					<li><a href="#">Donec ut vestibulum nunc</a></li>
					<li><a href="#">Ut malesuada suscipit augue accumsan rutrum</a></li>
					<li><a href="#">Suspendisse non est ut augue dapibus pulvinar</a></li>
				</ul>
			</div>
			<div class="col_201">
				<h4 class="replace">Events</h4>
				<ul class="bullet-list">
					<li><a href="#">At faucibus nulla placerat ac</a><span class="date">March 1<sup>st</sup></span></li>
					<li><a href="#">Sed iaculis convallis</a><span class="date">April 6th</span></li>
					<li><a href="#">Lacus eros, luctus a faucibus vitae</a><span class="date">May 18th</span></li>
				</ul>
			</div>
			<div class="col_201">
				<h4 class="replace">Contact</h4>
				<address>
				8407 Kearsarge Dr<br/>
				Austin, TX 78745-7647<br/>
				P: (512) 280-28232<br/>
				F: (512) 555-7856 <br/>
				</address>
				<a id="modalmap" href="#" >Map It !</a> </div>
			<div class="col_240">
				<h4 class="replace">Twitter feed</h4>
				<div class="pkb-tweet"></div>
				<ul id="social">
					<li><a href="#"><img src="{{asset('assets/img/twitter.png')}}" alt="Twitter" /></a></li>
					<li><a href="#"><img src="{{asset('assets/img/facebook.png')}}" alt="Facebook"  /></a></li>
					<li><a href="#"><img src="{{asset('assets/img/youtube.png')}}" alt="Youtube"  /></a></li>
					<li><a href="#"><img src="{{asset('assets/img/flickr.png')}}" alt="Flickr"  /></a></li>
				</ul>
			</div>
			<div id="footer-bottom">
				<div id="toTop" class="left">Back to Top</div>
				<div id="footer-note" class="right"><small>©2011 Theme by <strong>Population 2</strong>, designed for <strong>Themeforest</strong>. Protected by <strong>Copyscape</strong></small></div>
			</div>
		</div>
		<!-- Footer end --> 
	</div>
	<!-- Container end --> 
</div>

<script type="text/javascript" src="{{asset('assets/js/init_form.js')}}"></script>
</body>

</html>
