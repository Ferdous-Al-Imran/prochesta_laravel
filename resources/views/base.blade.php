<! DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quest</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">


<!--custom css-->
<link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
<!-- Important Owl stylesheet -->


<!--font-awesome-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
   <!--<div id="preloader">
    <div id="status">&nbsp;</div>
   </div>-->

     <div class="main-header content">
    	<!-- Header Upper -->
    	<div class="header-upper" style="color:#8abfe6">


        	   <div class="auto-container clearfix">
            	<!-- Logo -->
                <div class="logo" >
                    <a href="index.html"><img src="img/prochesta original logo.png" alt="Radium"></a>
                 </div>

                 <!--Info Outer-->
                 <div class="info-outer" >
                 	<!--Info Box-->
                    <div class="info-box">
                    	<div class="icon"><a class="msg-icon" href=""><i class="fa fa-phone"></i></a></div>
                        <strong>HOTLINE</strong>
                         <p class="phone" href="#">+8801842002023<br>+8801797599856</p>

                    </div>
                    <!--Info Box-->
                  <div class="info-box">
                    	<div class="icon"><a class="msg-icon" href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a></div>
                        <strong>ADDRESS</strong>
                         <p class="phone" href="#">Head Office- 46, North Begun<br>Bari,Tejgaon I/A, Dhaka-1208</p>

                    </div>
                    <!--Info Box-->
                    <div class="info-box social-box">
                    	<div class="social-links-one clearfix">
                        	<a href="#" class="facebook img-circle"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" class="google-plus img-circle"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="twitter img-circle"><i class="fa fa-youtube"></i></a>
                            <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                 </div>

               </div>

        </div><!-- Header Top End -->
     </div>

<section id="header" class="overlay">
    <div class="section-overlay">
        <div class="container">
            <!--<header class="parallax-window" data-parallax="scroll" data-image-src="../img/header-bg.jpg">-->
            <div class="parallax-slider">
                <div class="navbar navbar-inverse  opaque-navbar">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                                   <span class="sr-only">Toggle navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                               </button>
                            </div>
                            <div class="collapse navbar-collapse" id="collapse">
                                <ul class="nav navbar-nav pull-right">
                                    <li><a class="page-scroll" href="/">HOME</a></li>
                                    <li><a class="page-scroll" href="/about"  >ABOUT</a></li>
                                    <li><a class="page-scroll" href="/events">EVENTS</a></li>
                                    <li><a class="page-scroll" href="/volunteer">VOLUNTEER</a></li>
                                    <li><a class="page-scroll" href="#Contact">CONTACT</a></li>
                                </ul>
                            </div>
                           <div class="donate-button">
                               <a href="Single-event.html" class="btn-default white">DONATE</a>
                           </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    @yield('header_text')
                </div> <!--parallax-slider-->
            </div> <!--row-->
        </div>
        <!--</header>-->
    </div>
 </section>



@yield('content')


<address id="Contact">
    <div class="section-overlay">
        <div class="container">
            <div class="row" style="margin-top: 90px;margin-bottom:83px">
                <div class="col-md-4 contact-info" style="color:#fff">
                    <h1 style="font-size:2.1em;font-weight:400">CONTACT US</h1>
                    <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;"></div>
                    <form action="/contact" class="form-horizontal wow fadeIn" method="post" style="margin-left:22px">
                        <fieldset>
                            <div class="form-group">
                                <input name="name" type="text" required placeholder="NAME" class="form-control">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" required placeholder="EMAIL" class="form-control">
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" required placeholder="SUBJECT" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="5" style="margin: 12px -2px 0px 0px; height: 91px;" required placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                            <div class="form-group">
                                <div class="donate-button" style="margin:34px 0px 0px 0px">
                                    <input type="submit" value="SEND" class="btn-default blue" style="margin-left:-13px;">
                                </div> <!--about-left-button-->
                            </div>
                        </fieldset>
                    </form>
            </div>  <!--contact-info-->
            <div class="col-md-5 col-md-offset-3  address-info" style="color:#fff">
               <h1 style="font-size:2.1em;font-weight:400">ADDRESS</h1>
               <div style="width: 72px;
    height: 3px;
    background-color:#8abfe6;;
    margin: 5px 1px 19px;">
                           </div>
             <div class="contact-margin wow fadeIn" style="margin-left:23px;margin-top:50px">
                 <address class="address-description">

                      <p style="margin-bottom:25px;"><i class="fa fa-map-marker"></i>
                       <b>ADDRESS</b>
                      </p>
                      <footer>
                          <p class="address-footer"> 221B BAKER STREET<br> LONDON,ENGLAND</p>
                    </footer>

                 </address>
                  <address class="address-description">

                       <p style="margin-bottom:25px"><i class="fa fa-phone "></i>
                        <b>PHONE</b>
                        </p>
                        <footer>
                          <p class="address-footer" style="margin-left:31px"> 88-44-5561,11-555-4446</p>
                    </footer>

                  </address>
                  <address class="address-description">

                       <p ><i  class="fa fa-envelope-o"></i>
                          <b>MAIL</b>
                       </p>
                        <footer>
                          <p class="address-footer" style="margin-top: -6px;margin-left: 37px;">info@kinative.com</p>
                        </footer>

                 </address>
              </div> <!--contact-margin-->
          </div>  <!-- address-info-->
       </div> <!--row-->
     </div> <!--container-->
</div>
</address><!-- Contact-->


<section id="map">


      <div style="width:100%;max-width:100%;overflow:hidden;height:200px;color:red;">
         <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;">
            <div class="overlay" onClick="style.pointerEvents='none'">
              <a class="btn-default white"> <button class=" location">VIEW MAP</button></a>
            </div>
             <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Dhanmondi,+Dhaka,+Dhaka+Division,+Bangladesh&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-code-enabler" rel="nofollow" href="https://www.hostingreviews.website/compare/dreamhost-vs-bluehost" id="enable-map-info">is bluehost or dreamhost better</a><style>#embed-map-canvas img{max-width:none!important;background:none!important;}</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=2f3510e0-ecc0-af21-6c11-f85a349b7e7a&c=google-map-code-enabler&u=1463173318" defer="defer" async="async"></script>


</section>


<section id="contact-info" style="background:#1e1f24;padding:60px 0px">
     <div class="container">
         <div class="row" style="color:#fff">
            <div class="col-md-4 col-sm-6 col-xs-12">
               <h3 class="contact-us-header">ABOUT</h3>
                <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
                <p style="max-width:265px;font-size:16px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe
                </p>

                <div class="contact-us-social-icon">
                   <div class="icon-block"><a href="#"><i class="fa fa-facebook "></i></a></div>
                   <div class="icon-block"><a href="#"><i class="fa fa-google "></i></a></div>
                   <div class="icon-block"><a href="#"><i class="fa fa-youtube "></i></a></div>
                   <div class="icon-block"><a href="#"><i class="fa fa-linkedin "></i></a></div>
                 </div>

               <div class="subscribe">
                   <h3 class="contact-us-header">SUBSCRIBE TO OUR NEWSLETTER</h3>
                  <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;"></div>
                  <div class="subscribe-hide">
						<input class="form-control" type="email" id="subscribe-email" name="EMAIL" placeholder="Email Address" required="">
                         <a><button type="submit" id="subscribe-submit" class="btn"><i class="fa fa-envelope"></i></button></a>


				  </div>
               </div>


             <div class="links" >
                   <h3 class="contact-us-header">LINKS</h3>
                <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
                  <ul class="contact-us-linking" style="padding:0px 0px">
                       <li>-ABOUT</li>
                       <li>-EVENTS</li>
                       <li>-DONATE</li>
                       <li>-SERVICE</li>
                       <li>-UPCOMING</li>
                       <li>-CONTACT</li>

                  </ul>
             </div>
        </div>

           <div class="block col-md-4 col-sm-6 col-xs-12">
                  <h3 class="contact-us-header">FACEBOOK</h3>
                   <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>

                 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fprochesta.desh%2F%3Ffref%3Dts&tabs=timeline&width=340&height=530&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="330" height="515" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

            </div>


         <div class="block col-md-4 col-sm-12 col-xs-12 flickr_widget to_animate animated fadeInUp" data-animation="fadeInUp" style="opacity: 0;">
              <h3 class="contact-us-header">INSTAGRAM FEED</h3>
                <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
        <div class="col-md-12">
       <iframe src="http://instaembedder.com/gallery-v2.php?width=100&cols=3&rows=3&margin=8&color=gray&share_buttons=1&image_border=8&frame_color=white&cid=1760&" frameborder="0" width="375" height="226" ></iframe>

              <h3 class="contact-us-header">YOUTUBE FEED</h3>
              <div style="width: 72px; height: 3px;background-color:#8abfe6;margin: 5px 1px 19px;">
                </div>
         </div>
  <div class="col-md-12 ">
 <iframe src="https://ytchannelembed.com/ytce-gallery.php?user=UCeBWEO6YROscj5QDvrdsnbg&rows=1&ratio=hd&width=130&margin=15&desc="40&desc_color=FFFFFF&title=30&title_color=FFFFFF&https=0&duration=1&views=1&likes=0&dislikes=0&fav=0&cols=2" style="width:100%;max-width:300px;" class="ytce"></iframe>
   </div>
  </div>
         </div>
     </div>

</section>

<footer id="footer-section" style="background:#0e0e0e;padding:25px 0px">
			<p class="copyright" style="margin: 0!important;font-size:18px;
	padding: 25px 15px!important;
	text-align: center!important;
	line-height: 30px!important;
	color: #fff!important;letter-spacing:1.5px">
				© Copyright<a href="www.kinative.com" target="_blank" > KINATIVE</a> 2016, All Rights Reserved.
			</p>
		</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/jquery.syotimer.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/parallax.js-1.4.2/parallax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>



</body>
</html>
