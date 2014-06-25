<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs ==================================================
================================================== -->

<meta charset="utf-8">
<title>Nkinga Health Center</title>
<meta name="description" content="Place to put your description text">
<meta name="author" content="">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Mobile Specific Metas ==================================================
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================
================================================== -->
{{HTML::style("css/bootstrap.min.css")}}
{{HTML::style("css/bootstrap.css")}}
{{HTML::style("css/base.css")}}
{{HTML::style("css/skeleton.css")}}
{{HTML::style("css/screen.css")}}
{{HTML::style("css/prettyPhoto.css")}}
{{ HTML::style("font-awesome/css/font-awesome.css")}}

<!-- Favicons ==================================================
================================================== -->


<!-- Google Fonts ==================================================
================================================== -->

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<body>

<!-- Home - Content Part ==================================================
================================================== -->
<div id="header" style="margin-top: -20px">
    <div class="container header">
        <!-- Header | Logo, Menu
            ================================================== -->
        <header>
            <div class="logo"><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="" /></a></div>
            <div class="mainmenu">
                <div id="mainmenu">
                    <ul class="sf-menu">
                        <li><a href="{{url('/')}}" id="visited"><span class="home"><img src="{{asset('images/home.png')}}" alt="" /></span>Home</a></li>
                        <li><a href="#"><span class="home"><img src="{{asset('images/about.png')}}" alt="" /></span>About Us</a>
                        <ul>
                            <li><a href="{{url('history')}}">History</a></li>
                            <li><a href="{{url('leadership')}}">Leadership</a></li>
                            <li><a href="{{url('staff')}}">Staff</a></li>
                        </ul></li>
                        <li><a href="{{url('services')}}"><span class="home"><img src="{{asset('images/portfolio.png')}}" alt="" /></span>Services</a>

                        </li>
                        <li><a href="{{url('projects')}}"><span class="home"><img src="{{asset('images/shop.png')}}" alt="" /></span>Projects</a></li>

                        <li><a href="{{url('orportunities')}}"><span class="home"><img src="{{asset('images/features.png')}}" alt="" /></span>Orportunities</a></li>
                        <li><a href="{{url('contact')}}"><span class="home"><img src="{{asset('images/contact.png')}}" alt="" /></span>Contact Us</a></li>
                    </ul>
                </div>

                <!-- Responsive Menu -->

                <form id="responsive-menu" action="#" method="post">
                    <select>
                        <option value="">Navigation</option>
                        <option value="{{url('/')}}">Home</option>
                        <option value="{{url('about')}}">About</option>
                        <option value="{{url('servises')}}">Services</option>
                        <option value="{{url('gallery')}}">Portfolio Gallery</option>
                        <option value="{{url('projects')}}">Projects</option>
                        <option value="{{url('oportunities')}}">Oportunitie</option>
                        <option value="{{url('contact')}}">Contact</option>
                    </select>
                </form>
            </div>
        </header>
    </div>
</div>
@yield('contents')


<!-- Home Content Part - Box Two ==================================================
================================================== -->
<div class="container clients">
    <div class="sepContainer"></div>
    <h2>Our Partiners</h2>
    <div class="one_sixth"> <img src="{{asset('images/dot.jpg')}}" alt=""/> </div>
    <!-- end one_sixth -->
    <div class="one_sixth"> <img src="{{asset('images/dot.jpg')}}" alt=""/> </div>
    <!-- end one_sixth -->
    <div class="one_sixth"> <img src="{{asset('images/dot.jpg')}}" alt=""/> </div>
    <!-- end one_sixth -->
    <div class="one_sixth"> <img src="{{asset('images/dot.jpg')}}" alt=""/> </div>
    <!-- end one_sixth -->
    <div class="one_sixth"> <img src="{{asset('images/dot.jpg')}}" alt=""/> </div>
    <!-- end one_sixth -->
    <div class="one_sixth lastcolumn"> <img src="{{asset('images/dot.jpg')}}" alt=""/> </div>
    <!-- end one_sixth lastCol -->
</div>
<!-- end container -->

<!--Footer ==================================================
================================================== -->
<div id="footer">
    <div class="container footer">
        <div class="one_fourth">
            <h3>Latest</h3>
            <div id="tweets"></div>
        </div>
        <div class="one_fourth">
            <h3>Projectsroll</h3>
            <ul>
                <li class="lines"><a href="#" title="">Development</a></li>
                <li class="lines"><a href="#" class="">Project Title</a></li>
                <li class="lines"><a href="#" class="">Project Title</a></li>
                <li class="lines"><a href="#" class="">Project Title</a></li>
                <li class="lines"><a href="#" class="">Project Title</a></li>
            </ul>
        </div>
        <div class="one_fourth">
            <h3>Archive</h3>
            <ul>
                <li class="lines"><a href="#" class=""> August 2012</a></li>
                <li class="lines"><a href="#" class="">July 2012</a></li>
                <li class="lines"><a href="#" class="">Juny 2012</a></li>
                <li class="lines"><a href="#" class=""> May 2012</a></li>
                <li class="lines"><a href="#" class="">April 2012</a></li>
            </ul>
        </div>
        <div class="one_fourth lastcolumn">
            <h3>About</h3>
            <p>Dotphics is responsive, simple and clean template with a lot attention to detail. Get it now!</p>
            <p>Visit <a href="/" >Dotphics</a> and find more interesting things.</p>
        </div>
    </div>
    <!-- container ends here -->
</div>


<!-- footer ends here -->
<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
    <div class="container">
        <div class="eleven columns alpha">
            <p class="copyright">&copy; Copyright 2012. &quot;Dotphics&quot; by <a href="http://www.dotphics.com/">Dotphics</a>. All rights reserved.&nbsp;&nbsp;<a href="{{url('login')}}"><span class="home"><i class="fa fa-lock"></i></span>login</a></p>

        </div>
        <div class="five columns omega">
            <section class="socials">
                <ul class="socials fr">
                    <li><a href="#"><img src="{{asset('images/twitter.png')}}" class="poshytip" title="Twitter"  alt="" /></a></li>
                    <li><a href="#"><img src="{{asset('images/facebook.png')}}" class="poshytip" title="Facebook" alt="" /></a></li>
                    <li><a href="#"><img src="{{asset('images/google.png')}}" class="poshytip" title="Google" alt="" /></a></li>
                    <li><a href="#"><img src="{{asset('images/dribbble.png')}}" class="poshytip" title="Dribbble" alt="" /></a></li>
                </ul>
            </section>
        </div>
    </div>
    <!-- container ends here -->
</div>
<!-- copyright ends here -->
<!-- End Document
================================================== -->
<!-- Scripts ==================================================
================================================== -->


{{HTML::script("js/bootstrap.min.js")}}
{{HTML::script("js/jquery-1.8.0.min.js")}}
<!-- Main js files -->
{{HTML::script("js/screen.js")}}
<!--<!-- Tooltip -->-->
{{HTML::script("js/poshytip-1.0/src/jquery.poshytip.min.js")}}
<!-- Tabs -->
{{HTML::script("js/tabs.js")}}
<!--<!-- Tweets -->-->
{{HTML::script("js/jquery.tweetable.js")}}
<!--<!-- Include prettyPhoto -->-->
{{HTML::script("js/jquery.prettyPhoto.js")}}
<!--<!-- Include Superfish -->-->
{{HTML::script("js/superfish.js")}}
{{HTML::script("js/hoverIntent.js")}}
<!--<!-- Flexslider -->-->
{{HTML::script("js/jquery.flexslider.js")}}
{{HTML::script("js/modernizr.custom.29473.js")}}
{{HTML::script("js/jquery.slimscroll.js")}}
{{HTML::script("js/jquery.slimscroll.min.js")}}
{{HTML::script("js/carousel.js")}}
{{ HTML::script("bootstrap/js/bootstrap.js") }}

</head>
</body>
</html>