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
                <li>Lowa Health Centre,</li>
                <li>P.o Box:107,Kahama - Tanzania</li>
                <li>Phone L1: +255 786 453 463</li>
                <li>Phone L2: +255 755 876 743</li>
                <li>Website: <a href="#" title="">www.lowahealthcentre.org</a></li>
                <li>Email: <a href="#" title="">lowahealthcentre@gmail.com</a></li>
            </ul>
        </section>
    </div>
    <!-- one_third ends here -->
    <div class="two_third lastcolumn contact1">
        <div id="contactForm">
            <h2>Leave a comment</h2>
            <div class="sepContainer"></div>
            <form method="post" class="form-horizontal" action="{{ url("contact")}}" id="contact_form">
                <div class="name">
                    <label for="name">Your Name:</label>
                    <p> Please enter your full name</p>
                    <input id=name name=email type=text placeholder="e.g. Mr. Peter Raphael" required />
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


<script>
    $(document).ready(function (){


        $('#contacts').on('submit', function(e) {
            e.preventDefault();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span class='text-success' style='font-size:12px;'>Making changes please wait...</span><h3>");
            $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess
            });

        });



        function afterSuccess(){
            $('#FileUploader').resetForm();
            setTimeout(function() {
                $("#output").html("");
            }, 3000);
            // $("#listperson").load("<?php echo url("individuals/list") ?>")
            $('#contacts').resetForm();
        }
    });

</script>
@stop