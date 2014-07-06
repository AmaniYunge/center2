@extends('master')
@section('contents')

<!-- Home Content Part - Slider ==================================================
================================================== -->
<div class="flexslider">
    <ul class="slides">
          <li>
             <div class="col-xs-4">
                 <div id="divHeaderText" class="page-content">
                     <div id="divHeaderLine1">Lowa Health Centre!</div><br>
                     <div id="divHeaderLine2">The clinic is located in western part of Tanzania in a small village namely Lowa in
                         Kahama District.
                     </div>
             </div>
             </div>
              <div class="col-xs-8">
          <img src="{{asset('images/flexslider/slide2.jpg')}}" style="height: 480px;width: 100%">
           </div>
      </li>

        <li>
            <div class="col-xs-8">
                <img src="{{asset('images/flexslider/slide.jpg')}}" style="height: 480px;width: 100%">
            </div>
            <div class="col-xs-4">
                <div id="divHeaderText" class="page-content">
                    <div id="divHeaderLine1">Lowa Health Centre!</div><br>
                    <div id="divHeaderLine2">The clinic is located in western part of Tanzania in a small village namely Lowa in
                        Kahama District.
                    </div>
                </div>
            </div>

        </li>

        <li>
            <div class="col-xs-4">
                <div id="divHeaderText" class="page-content">
                    <div id="divHeaderLine1">Lowa Health Centre!</div><br>
                    <div id="divHeaderLine2">The clinic is located in western part of Tanzania in a small village namely Lowa in
                        Kahama District.
                    </div>
                </div>
            </div>
            <div class="col-xs-8">
                <img src="{{asset('images/flexslider/slide3.jpg')}}" style="height: 480px;width: 100%">
            </div>
        </li>
         </ul>
</div>
<!-- Home Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
            <h2 style="text-align: center;color: #843534">Our Projects</h2>
            <p>Dotphics is my latest <span class="red">responsive</span> Site Template freebie.
                Dotphics Template is simple and clean template with a lot attention to detail.
                It is suitable for a lot of <span class="green">different</span> business and private uses.</p>
             </div>
            <div class="col-md-6" style="box-shadow: 1px 1px 5px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                <p style="text-align: center;font-size: 28px; color: #843534">Welcome..!</p>
                <p style="font-size: 17px">
                    Lowa Clinic is health institution established by<span class="red"> Swedish missionaries </span>firstly a small
                    dispensary. This kind of the social work within <span class="green">The Free Pentecostal Church in
                    Tanzania (FPCT)</span> was part and parcel of evangelism which already started in the 1930’s.
                    Gradually it has developed and upgraded to become a Health Centre in 1995.
                </p>
                </div>
            <div class="col-md-3" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                <h2 style="text-align: center;color: #843534">Latest News</h2>
                <p>Dotphics is my latest <span class="red">responsive</span> Site Template freebie.
                    Dotphics Template is simple and clean template with a lot attention to detail.
                    It is suitable for a lot of <span class="green">different</span> business and private uses.</p>
                </div>
    </div>
</div>
<!-- container ends here -->

<!-- Home Content Part - Box Three ==================================================
================================================== -->
<div class="container boxthree">
    <div class="sepContainer1"><!-- --></div>
    <div class="blankSeparator"></div>
    <div class="one_third" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreeleft"> <img src="{{asset('images/curativ.jpg')}}" style="height:200px;width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3 style="text-align: center">Curative Services</h3><br>
            <p>Patient attendance figures for both outpatient and inpatients wards were
                reasonable. This group of patients has since long been the major contributor of
                patient fees for running costs.
            </p>
            <div class="toggle-trigger">
                <a class ="simple" href="#">+ Learn more</a></div>
            <div class="toggle-container">
                <p>Malaria and other respiratory diseases have been
                    the major causes for patients attending to this institution </p>
                <li style="color: #ac2925">Outpatient Department Services (OPDS)</li>
                    <p>This is the first reception point where patients are seen before sent to other
                    departments. OPD is open from Monday to Friday as normal working days but
                    Saturdays, Sundays and public holidays are also open to handle emergence cases.</p>

                <li style="color: #ac2925">Inpatient Department Services (IPDS) </li>
                    <p>Currently, the inpatients care services have about 35 beds divided over two wards.
                        The wards are general ward (22 beds) and maternity (3beds). During the period,
                        the total admissions has been 965</p>

            </div>
        </section>
    </div>
    <!-- one-third column ends here -->
    <div class="one_third" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreecenter"> <img src="{{asset('images/preventive.jpg')}}" style="height:200px;width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3 style="text-align: center">Preventive Services</h3><br>
            <p>Prevention of preventable diseases has remained one of our major goals</p>
            <li style="color: #ac2925">Reproductive health services </li>
            <li style="color: #ac2925">Health Education including prevention of HIV/AIDS </li>
            <div class="toggle-trigger">
                <a class ="simple" href="#">+ Learn more</a></div>
            <div class="toggle-container">
               <li style="color: #ac2925"> Reproductive health services</li>.
                <p> This kind of services has continued well. It the
                    policy of the government for Mother and Child Health care to be provided free of
                    charge but a little fee is chargeable only for deliveries which is in turn reimbursed
                    by the local government. Services provided include immunization, child growth
                    monitoring, antenatal care and family planning. Outreach visits for these services
                    are conducted to other distant villages of Kidunyashi (2.5 km) and Bukooba (8 km).
                    As the major causes of deaths for mothers and children are associated with poor
                    hygiene, ignorance, malnutrition, poor physical infrastructure, preventive services
                    has great contribution to the reduction of maternal and infant mortality rates
                </p>

                <li style="color: #ac2925"> Health Education including prevention of HIV/AIDS.</li>.
                <p> There is no special program for health education but this is normally integrated during reproductive
                    health services out reach to villages visited.

                </p>
                 </div>
        </section>
    </div>
    <!-- one-third column ends here -->
    <div class="one_third lastcolumn" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreeright"> <img src="{{asset('images/suport.jpg')}}" style="height:200px;width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3 style="text-align: center">Support and Specialized Services</h3>
           <li style="color: #ac2925"> Laboratory services</li>
            <p>Laboratory services continued well and busy during 2009. As part of these
                services, Blood Transfusions services given
                to patients

            </p>
            <div class="toggle-trigger">
                <a class ="simple" href="#">+ Learn more</a></div>
            <div class="toggle-container">
                <p> Blood Transfusions services given
                    to patients served lives of many anemic
                    patients especially children. Before the
                    commencement of blood transfusions
                    services, people were referred to District
                    hospital which is located in Kahama about
                    30 km away from Lowa.
                </p>

            </div>
        </section>
    </div>
    <!-- one-third column ends here -->
</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>

@stop