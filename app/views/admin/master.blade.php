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

    {{HTML::script("js/jquery-1.8.0.min.js")}}

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
                            <li><a href="{{url('services')}}"><span class="home"><img src="{{asset('images/portfolio.png')}}" alt="" /></span>Services</a>
                            </li>
                            <li><a href="{{url('projects')}}"><span class="home"><img src="{{asset('images/shop.png')}}" alt="" /></span>Projects</a></li>

                            <li><a href="{{url('orportunities')}}"><span class="home"><img src="{{asset('images/features.png')}}" alt="" /></span>Orportunities</a></li>
                            <li><a href="{{url('contact')}}"><span class="home"><img src="{{asset('images/contact.png')}}" alt="" /></span>Contact Us</a></li>
                        </ul>
                    </div>



                </div>
            </header>
        </div>
    </div>

    @yield('contents')



    <!--Footer ==================================================
    ================================================== -->
    @include('footer')


    <!-- footer ends here -->
    <!-- Copyright ==================================================
    ================================================== -->

    <!-- copyright ends here -->
    <!-- End Document
    ================================================== -->
    <!-- Scripts ==================================================
    ================================================== -->


    {{HTML::script("js/bootstrap.min.js")}}
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