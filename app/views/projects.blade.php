@extends('master')
@section('contents')

<!-- Portfolio Project Content Part ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container portfolio">
    <div id="divHeaderLine2">Our Projects</div>
    <div class="sepContainer1"><!-- --></div>
    <div class="two_third">
        <div class="flexslider">
            <ul class="slides">
                <li><img src="{{asset('images/p.jpg')}}" alt="" /></li>
                <li><img src="{{asset('images/p2.jpg')}}" alt="" /></li>
                <li><img src="{{asset('images/p3.jpg')}}" alt="" /></li>
            </ul>
        </div>
    </div>
    <div class="one_third lastcolumn">

        <h2>Upgrading of infrastructures</h2>
        <p>Currently we are renovating and extending some of  the buildings in order to provide more services and cope  with today’s changing environment in health care.
        One building is being  renovated and extended to become a theatre for emergency and planned surgeries.
        The major purpose is to bring these services closer to the community. At present, patients are referred to
       <span class="green"> Kahama District hospital for surgeries.</span> The distance from Lowa to Kahama is  about 27 kms which is to far specifically when it comes for patient emergency cases.
            Additionally, another building is  under renovation  and  extention to provide private rooms for patients requiring such services.
        </p><p> </p>
         <h4>The private rooms will contribute to increase
             in revenues that will help to <span class="red">subsidize treatment costs</span> for the poorest of the poor!</h4>
        <p class="portfolio"><a href="{{url('services')}}">Visit services</a></p>
    </div>

    <div class="two_third">
        <div class="flexslider">
            <ul class="slides">
                <li><img src="{{asset('images/p.jpg')}}" alt="" /></li>
                <li><img src="{{asset('images/p2.jpg')}}" alt="" /></li>
                <li><img src="{{asset('images/p3.jpg')}}" alt="" /></li>
            </ul>
        </div>
    </div>
    <div class="one_third lastcolumn">

        <h2>Water Projects</h2>
        <p>Our institution faces a severe shortage of water and is a great problem to both patients and staff.
        The available borehole does not meet the current demand of water supplied to the institution.
        As a matter of fact, a project for drilling another borehole will be implemented this year.
        This project requires a huge investment which too expensive for our institution to afford.</p>
        <h4>Thanks to our development partners in Sweden namely <span class="red">Atlascopco Company and Ostersund Pentecostal
        Church</span> for their interest to support the project. The overall objective of the project is
        to contribute to Lowa Health center access to safe and clean water through drilling borehole and ultimately
        improve the health status of patients, staff and the community.</h4>

        <p class="portfolio"><a href="{{url('services')}}">Visit services</a></p>
    </div>

<!--<!-- projects Pagination ==================================================-->
<!--================================================== -->
<!--<div class="container">-->
<!--    <div class="blankSeparator"></div>-->
<!--    <div id="pagination" class="fl">-->
<!--        <!-- Pagination -->
<!--        <ul class="pagination">-->
<!--            <li class='first-page'><a href='#'>&laquo;</a></li>-->
<!--            <li><a href='#' >&lsaquo;</a></li>-->
<!--            <li><a href="#" id="currentPage">1</a></li>-->
<!--            <li><a href="{{url('projects')}}">2</a></li>-->
<!--            <li><a href="{{url('projects')}}">3</a></li>-->
<!--            <li><a href="#">4</a></li>-->
<!--            <li><a href='#' >&rsaquo;</a></li>-->
<!--            <li class='last-page'><a href='#'>&raquo;</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <!-- end pagination -->
</div>
<!-- end centerContainer -->

<div class="blankSeparator1"></div>

@stop