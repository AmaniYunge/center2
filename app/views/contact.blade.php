@extends('master')
@section('contents')
<!-- Contact Content Part - GoogleMap ==================================================
================================================== -->
<section class="map">
    <!-- google map -->
    <div class="map-holder">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31852.253150665754!2d33.43673696855604!3d-3.6934009712418696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404646302883" width="600" height="450" frameborder="0" style="border:0"></iframe>
            <!-- end google map -->
        </div>
        <!--map-container ends here-->
    </div>
    <!--map-holder ends here-->
</section>

<!-- Contact Content Part - Contact Form ==================================================
================================================== -->
<div class="container">
    <div class="blankSeparator"></div>
    <!-- Contact Sidebar ==================================================
  ================================================== -->
    <div class="one_third contactsidebar">
        <section class="first">
            <h3>Contact Us</h3>
            <div class="boxtwosep"></div>
            <ul class="contactsidebarList">
                <li>Lowa Village, Tabora</li>
                <li>Phone: +255 684 584 884</li>
                <li>Fax: +255 684 584 884</li>
                <li>Website: <a href="#" title="">www.lowahealthcentre.org</a></li>
                <li>Email: <a href="#" title="">info@lowahealthcentre</a></li>
            </ul>
        </section>
    </div>
    <!-- one_third ends here -->
    <div class="two_third lastcolumn contact1">
        <div id="contactForm">
            <h2>Leave a comment</h2>
            <div class="sepContainer"></div>
            <form action="process.php" method="post" id="contact_form">
                <div class="name">
                    <label for="name">Your Name:</label>
                    <p> Please enter your full name</p>
                    <input id=name name=email type=text placeholder="e.g. Mr. John Smith" required />
                </div>
                <div class="email">
                    <label for="email">Your Email:</label>
                    <p> Please enter your email address</p>
                    <input id=email name=email type=email placeholder="example@domain.com" required />
                </div>
                <div class="message">
                    <label for="message">Your Message:</label>
                    <p> Please enter your question</p>
                    <textarea id=message name=message rows=6 cols=10 required></textarea>
                </div>
                <div id="loader">
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
        <!-- end contactForm -->
    </div>
</div>
<div class="blankSeparator2"></div>
@stop