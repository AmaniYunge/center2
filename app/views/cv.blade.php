@extends('master')
@section('contents')

<!-- Features Content Part ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container resume">
    <h2>Nkinga Health Center2 Resume</h2>
    <p>Lorem ipsum dolor sit amet, Mauris laoreet nulla at dui consectetur vel elementum justo tempor. Sed erat dui, sagittis a pharetra ut, tempor erat dui, sagittis a pharetra ut, tempor vel turpis. Vestibulum blandit ultricies tempus. Phasellus sollicitudin quam vitae eros aliquam viverra.</p>
    <div class="one_third">
        <h3>Work Experience</h3>
    </div>
    <div class="two_third lastcolumn">
        <p><strong>2009-2011</strong> - Mauris laoreet nulla at dui consectetur vel elementum justo tempor. Sed erat dui, sagittis a pharetra ut, tempor erat dui, sagittis a pharetra ut, tempor vel turpis. Vestibulum blandit ultricies tempus.</p>
        <p><strong>2011-2012</strong> - Mauris laoreet nulla at dui consectetur vel elementum justo tempor. Sed erat dui, sagittis a pharetra ut, tempor erat dui, sagittis a pharetra ut, tempor vel turpis. Vestibulum blandit ultricies tempus.</p>
    </div>
    <div class="one_third">
        <h3>Skills</h3>
    </div>
    <div class="two_third lastcolumn">
        <div class="one_half">
            <h4>Languages</h4>
            <ul>
                <li>HTML/HTML5/CSS/CSS3</li>
                <li>PHP</li>
                <li>JS</li>
            </ul>
        </div>
        <div class="one_half lastcolumn">
            <h4>Software</h4>
            <ul>
                <li>WordPress</li>
                <li>Adobe Dreamweaver CS5</li>
                <li>Adobe Photoshop CS5</li>
                <li>Microsoft Office</li>
            </ul>
        </div>
    </div>
    <div class="one_third">
        <h3>Awards</h3>
    </div>
    <div class="two_third lastcolumn">
        <div class="one_fourth">
            <p><img src="{{asset('images/12.jpg')}}" alt=""/></p>
            <p>2011 Best Theme Award</p>
        </div>
        <div class="one_fourth">
            <p><img src="{{asset('images/12.jpg')}}" alt=""/><br />
            <p>2012 Project Award</p>
        </div>
        <div class="one_fourth">
            <p><img src="{{asset('images/12.jpg')}}" alt=""/></p>
            <p>2012 Project Award</p>
        </div>
        <div class="one_fourth lastcolumn">
            <p><img src="{{asset('images/12.jpg')}}" alt=""/></p>
            <p>2009 Project of the Year</p>
        </div>
    </div>
</div>
<div class="blankSeparator1"></div>

@stop