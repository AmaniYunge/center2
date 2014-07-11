@extends('master')
@section('contents')

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
                the major causes for patients attending to this institution </p>
            <div class="toggle-trigger">
                <a class ="simple" href="#">+ Learn more</a></div>
            <div class="toggle-container">

                <li style="color: #ac2925">Outpatient Department Services (OPDS)</li>
                <p>This is the first reception point where patients are seen before sent to other
                    departments.</p>

                <li style="color: #ac2925">Inpatient Department Services (IPDS) </li>
                <p>Currently, the inpatients care services have about 60 beds divided over four wards.
                    These are:- General ward (30 beds), Labour ward (12 beds), Male ward (8 beds) and Private ward (10 beds).</p>

            </div>
        </section>
    </div>
    <!-- one-third column ends here -->
    <div class="one_third" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreecenter"> <img src="{{asset('images/preventive.jpg')}}" style="height:200px;width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3 style="text-align: center">Preventive Services</h3><br>
            <p>Prevention of preventable diseases has remained one of our major goals.</p>
            <li style="color: #ac2925">Reproductive health services </li>
            <p> Static services at facilities are supported by mobile clinic in the communities.
                It the policy of the government for Mother and Child Health care to be provided free of
            </p>
            </p>
            <div class="toggle-trigger">
                <a class ="simple" href="#">+ Learn more</a></div>
            <div class="toggle-container">
                <p> charge which include immunization, child growth monitoring, antenatal care and family planning.<br>As the major causes of deaths for mothers and children are associated with poor hygiene, ignorance,
                    malnutrition, poor physical infrastructure, these services contribute to the reduction of maternal and
                    infant mortality rates in the communities.</p>
                <li style="color: #ac2925"> Health Education including prevention of HIV/AIDS.</li>.
                <p> There is no special program for health education but this is normally integrated in reproductive health services.

                </p>
            </div>
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
            <div class="toggle-trigger">
                <a class ="simple" href="#">+ Learn more</a></div>
            <div class="toggle-container">
                <p> more examinations will continue to be introduced.</p>
                <h4 style="color: #ac2925"> Dental services</h4>
                <p>These are mainly dental checkups,dental extractions and health education.
                    For those patients requiring dental fillings and scaling, they are referred to
                    Nkinga Referral Hospital where major procedures are undertaken. </p>
            </div>
        </section>
    </div>
    <!-- one-third column ends here -->
</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>

@stop
