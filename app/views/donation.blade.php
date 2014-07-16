@extends('master')
@section('contents')

<div class="blankSeparator"></div>
<div class="container">
    <div id="divHeaderLine2">Donation</div>
    <div class="sepContainer1"><!-- --></div>
    <section class="aboutoneleft">
        <div class="row">
         <div class="col-md-8">
             <p class="lead">
                 Your generous donation can enable us to walk an extra mile in serving the most vulnerable group in the community.
                 The donation is used in three main ways: </p>
             <li  style="color: #647884"> Procure essential drugs and medical supplies</li>
             <li  style="color:  #647884">Provide free treatment for patients with selected chronic diseases like epilepsy or elderly who cannot afford completely to
                 contribute for medical services we offer.</li>
             <li  style="color:  #647884"> Improving Facilities such as renovation of buildings etc</li>

             <div class="blankSeparator"></div>

                <p class="lead"><strong> To Make a Donation by Mail<br>
                         Send check or money order to:</strong></p>
                <p class="lead">Lowa Health Centre,<br>
                        P.O. Box 107,<br>
                        Kahama Tanzania</p>



         </div>
            <div class="col-md-4">

            </div>


        </div>
        <img class="raster" src="{{asset('images/raster.png')}}" alt=""/>
        <p class="quote" style="font-size: 14px">Please remember to include a note listing what fund you’d like to direct your donation towards e.g.
            reduction of maternal deaths, general outpatient services, health education including HIV/AIDS etc.
            Remember also to send us your mail address if you would like a card to be sent to the family or people
            whom you think notifying them of your gift.
        </p>

    </section>



</div>
@stop