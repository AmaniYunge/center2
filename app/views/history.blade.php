@extends('master')
@section('contents')

<!-- About Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container">
    <div class="two_third">
        <section class="aboutoneleft">
            <h2>Historical Background</h2>
            <p>This institution was established in 1930’s by Swedish missionaries firstly as a small dispensary. This kind of social work has gradually developed and upgraded to become a
                Health Center with 60beds in 1994.
            </p>
            <img class="raster" src="{{asset('images/raster.png')}}" alt=""/>
            <p class="quote" style="font-size: 14px">The clinic is located in western part of Tanzania in a small village namely Lowa in
                Kahama District.
            </p>
        </section>

    </div>
    <!-- end two-third column ends here -->
    <div class="one_third lastcolumn">
        <section class="aboutoneright">
            <h2 style="text-align: center">Our Latest Work</h2>
            <img src="{{asset('images/p2.jpg')}}" style="width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
        </section>
    </div>
    <!-- end one-third column ends here -->
</div>
<!-- container ends here -->
<!-- About Content Part - Box Two ==================================================
================================================== -->
<div class="container">
    <div class="sepContainer1"></div>
    <!-- Toggle -->
    <h2>Our Motivation</h2>
    <div class="toggle-trigger">Mission</div>
    <div class="toggle-container">
        <p>Provide the highest quality health care at affordable cost. </p>
    </div>
    <div class="toggle-trigger">Vission</div>
    <div class="toggle-container">
        <p>Lowa health centre will be recognised as one of the best health care provider in the country</p>
    </div>
    <div class="toggle-trigger">Core Values</div>
    <div class="toggle-container">
        <ul>
            <li>Excellence - In maintaining a standard of care.</li>
            <li>Community - To treat the families in the community at affordable cost.</li>
            <li>Antcorruption - There is no room for corruption in all we do.</li>
            <li>Motivation - Workforce is one of the most valuable asset.</li>
        </ul>
    </div>
    <div class="toggle-trigger">Overall Goals</div>
    <div class="toggle-container">
        <p>Enhance the health and well-being of the community we save. </p>
    </div>
    <!-- ENDS Toggle -->
</div>
<div class="blankSeparator1"></div>

@stop