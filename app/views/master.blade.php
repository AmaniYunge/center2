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
<title>Lowa Health Centre</title>
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
{{HTML::style("css/carousel.css")}}
{{ HTML::style("font-awesome/css/font-awesome.css") }}
{{HTML::style("css/skeleton.css")}}
{{HTML::style("css/screen.css")}}
{{HTML::style("css/prettyPhoto.css")}}
{{ HTML::style("font-awesome/css/font-awesome.css")}}
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Roboto:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    {{HTML::script("js/jquery-1.8.0.min.js")}}
    {{HTML::script("js/jquery.slimscroll.min.js")}}
    {{ HTML::script("js/carousel.js") }}
    <!-- Favicons ==================================================
    ================================================== -->


<!-- Google Fonts ==================================================
================================================== -->

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<body >

<!-- Home - Content Part ==================================================
================================================== -->
<div id="header" style="margin-top: -20px">
    <div class="container header">
        <!-- Header | Logo, Menu
            ================================================== -->
        <header>
            <div class="logo" style="padding-top: 30px"><a href="{{url('/')}}" style="color: #8b0000; font-size: 32px; font-weight: 700">Lowa Health Centre</a>
                <br><span class="text-warning" style="font-size: 16px">FPCT Health and Social Welfare Department</span></div>

            <div class="mainmenu">
                <div id="mainmenu">
                    <ul class="sf-menu">
                        <li><a href="{{url('/')}}" id="visited"><span class="home"><img src="{{asset('images/home.png')}}" alt="" /></span>Home</a></li>
                        <li><a href="#"><span class="home"><img src="{{asset('images/about.png')}}" alt="" /></span>About Us</a>
                        <ul>
                            <li><a href="{{url('history')}}">History</a></li>
                            <li><a href="{{url('leadership')}}">Leadership & Governance</a></li>
                            <li><a href="{{url('staff')}}">Staff</a></li>
                        </ul></li>
                        <li><a href="{{url('services')}}"><span class="home"><img src="{{asset('images/portfolio.png')}}" alt="" /></span>Services</a>

                        </li>
                        <li><a href="{{url('projects')}}"><span class="home"><img src="{{asset('images/shop.png')}}" alt="" /></span>Projects</a></li>

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
                        <option value="{{url('oportunities')}}">Opportunities</option>
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
    <div class="row-fluid"  >
        <div class="sepContainer"></div>
        <h2>Our Partners</h2>
        <div class="col-md-2">
            <h style="color: rgb(148, 148, 148); font-size: 18px">Tenhult Filadelfia Kyrkan</h>
        </div>
        <div class="col-md-2">
            <h style="color: rgb(148, 148, 148); font-size: 18px">Ostersund Filadelfia Kyrkan</h>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
    </div>

</div>

<div class="blankSeparator"></div>
<!-- end container -->

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
{{HTML::script("js/carousel.js")}}
{{ HTML::script("bootstrap/js/bootstrap.js") }}

</head>
</body>
</html>