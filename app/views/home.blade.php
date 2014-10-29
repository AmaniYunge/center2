@extends('master')
@section('contents')

<!-- Carousel
================================================== -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">

            <img src="{{asset('images/flexslider/j.jpg')}}" alt="Generic placeholder image" style="width: 100%; height: 590px">
            <div class="carousel-caption">
                <h style="font-size:32px; color: #F5F5F5">The clinic is located in western part of Tanzania in a small village namely Lowa in Kahama District!
                </h><br><br>
                <a class="btn btn-lg btn-warning" href="{{url('donation')}}" role="button" style="font-size:2em">Donation &raquo;</a>
            </div>
        </div>

        <div class="item">
            <img src="{{asset('images/flexslider/k.jpg')}}" alt="Generic placeholder image" style="width: 100%; height: 590px">
            <div class="carousel-caption"><h style="font-size:32px; color: #F5F5F5">Training of more staff to improve the quality of health services rendered to the people.
                </h><br><br>
                <a class="btn btn-lg btn-warning" href="{{url('donation')}}" role="button" style="font-size:2em">Donation &raquo;</a>
            </div>
        </div>

        <div class="item">
            <img src="{{asset('images/flexslider/u.jpg')}}" alt="Generic placeholder image" style="width: 100%; height: 590px">
            <div class="carousel-caption"><h style="font-size:32px; color: #F5F5F5">Your generous donation can enable us to walk an extra mile in serving the most vulnerable group in the community.
                </h><br><br>

                <a class="btn btn-lg btn-warning" href="{{url('donation')}}" role="button" style="font-size:2em">Donation &raquo;</a>
            </div>
        </div>

    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

    </a>
</div>

<!-- Home Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
            <div class="inner-div">
                <h2 style="text-align: center;color: #843534">Our Projects</h2>
                <h4><strong>Water Project</strong></h4>
                <p>Our institution faces a severe shortage of water for both <span class="red"> patients and staff consumption.</span>
                    The available borehole does not  <span class="green">meet the current demand</span> of water supplied to the institution.</p>

                <hr>
                <h4><strong>Upgrading of infrastructures</strong></h4>
                <p>
                    Currently we are<span class="red"> renovating and extending</span>  the building in order to cope with today’s changing environment.
                    One building is being extended and renovated to be a theater for emergency and planned surgeries.
                </p>
            </div>
        </div>

        <div class="col-md-6" style="box-shadow: 1px 1px 5px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                <p style="text-align: center;font-size: 28px; color: #843534">Welcome..!</p>
                <p style="font-size: 17px">
                    Lowa Clinic is health institution established by<span class="red"> Swedish missionaries </span>firstly as a small
                    dispensary. This kind of the social work within <span class="green">The Free Pentecostal Church in
                    Tanzania (FPCT)</span> was part and parcel of evangelism which already started in the 1930’s.
                    Gradually it has developed and upgraded to become a Health Centre in 1995.
                </p>
                </div>
            <div class="col-md-3" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                <div class="inner-div">
                    <h2 style="text-align: center;color: #843534">Latest News</h2>
                    <h4><strong>Partnership Meeting </strong></h4>
                    <p>
                        In May 2014, our administrative and projects manager travelled to Sweden. Among other places, he visited<span class="red"> Ostersund and
                        Stokholm</span> where he met with our supporters for water project.
                        Thanks to the<span class="green"> Ostersund Pentecostal Church Mission Council and Atlascopco Company </span>for the interest to fund the project
                    </p>
                    <hr>

                </div>
            </div>
    </div>
</div>

<script>
    $(function(){
        $('.inner-div').slimScroll({
            height: '210px'
        });
    });
</script>
<!-- container ends here -->

<!-- Home Content Part - Box Three ==================================================
================================================== -->
<div class="container boxthree">
    <div class="sepContainer1"><!-- --></div>
    <div class="blankSeparator"></div>
    <div class="one_third" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreeleft"> <img src="{{asset('images/curativ.jpg')}}" style="height:200px;width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3 style="text-align: center">Curative Services</h3><br>
            <p> The services are open from Monday to Friday as
                normal working days but Saturdays, Sundays and Public Holidays are also open to handle emergency cases.<br>Malaria and other respiratory diseases have been
                the major causes for patients attending to this... </p>
<!--            <div class="toggle-trigger">-->
<!--                <a class ="simple" href="#">+ Learn more</a></div>-->
<!--            <div class="toggle-container">-->
<!---->
<!--                <li style="color: #ac2925">Outpatient Department Services (OPDS)</li>-->
<!--                    <p>This is the first reception point where patients are seen before sent to other-->
<!--                    departments.</p>-->
<!---->
<!--                <li style="color: #ac2925">Inpatient Department Services (IPDS) </li>-->
<!--                    <p>Currently, the inpatients care services have about 60 beds divided over four wards.-->
<!--                        These are:- General ward (30 beds), Labour ward (12 beds), Male ward (8 beds) and Private ward (10 beds).</p>-->
<!---->
<!--            </div>-->
        </section>
    </div>
    <!-- one-third column ends here -->
    <div class="one_third" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreecenter"> <img src="{{asset('images/preventive.jpg')}}" style="height:200px;width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3 style="text-align: center">Preventive Services</h3><br>
            <p>Prevention of preventable diseases has remained one of our major goals.</p>
            <li style="color: #ac2925">Reproductive health services </li>
            <p> Static services at facilities are supported by mobile clinic in the communities.
                It the policy of the government for Mother and Child Health care to be provided free...
                </p>
</p>
<!--            <div class="toggle-trigger">-->
<!--                <a class ="simple" href="#">+ Learn more</a></div>-->
<!--            <div class="toggle-container">-->
<!--                <p> charge which include immunization, child growth monitoring, antenatal care and family planning.<br>As the major causes of deaths for mothers and children are associated with poor hygiene, ignorance,-->
<!--                    malnutrition, poor physical infrastructure, these services contribute to the reduction of maternal and-->
<!--                    infant mortality rates in the communities.</p>-->
<!--                <li style="color: #ac2925"> Health Education including prevention of HIV/AIDS.</li>.-->
<!--                <p> There is no special program for health education but this is normally integrated in reproductive health services.-->
<!---->
<!--                </p>-->
<!--                 </div>-->
        </section>
    </div>
    <!-- one-third column ends here -->
    <div class="one_third lastcolumn" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreeright"> <img src="{{asset('images/suport.jpg')}}" style="height:200px;width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3 style="text-align: center">Supportive and Other Specialized Services</h3>
           <h4 style="color: #ac2925"> Laboratory services</h4>
            <p>Laboratory examinations are carried out as daily routines in order to provide the patients with the right treatment.
                Examinations performed ranges from basic microscopy to hematological ones. As we continue to upgrade our services,


            </p>
<!--            <div class="toggle-trigger">-->
<!--                <a class ="simple" href="#">+ Learn more</a></div>-->
<!--            <div class="toggle-container">-->
<!--                <p> more examinations will continue to be introduced.</p>-->
<!--                <h4 style="color: #ac2925"> Dental services</h4>-->
<!--                  <p>These are mainly dental checkups,dental extractions and health education.-->
<!--                      For those patients requiring dental fillings and scaling, they are referred to-->
<!--                      Nkinga Referral Hospital where major procedures are undertaken. </p>-->
<!--            </div>-->
        </section>
    </div>
    <!-- one-third column ends here -->
</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>

@stop