@extends('master')
@section('contents')

<!-- Home Content Part - Box Three ==================================================
================================================== -->
<div class="container boxthree">
    <div class="blankSeparator"></div>
   <p class="lead" style="text-align: center;font-size: 28px">Leadership & Governance</p>
    <div class="sepContainer1"><!-- --></div>
    <div class="row">
        <div class="col-md-3" style="box-shadow: 5px 5px 10px #888888; background-color: #bfd6e4">
            <h2 style="text-align: center">Chairperson</h2>
            <section class="boxthreecenter"> <img src="{{asset('images/2.jpg')}}" style="box-shadow: 1px 1px 5px #888888;height: 130px" alt=""/>
                <h3>Amani Yunge</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </section>
            <div class="toggle-trigger">
                <a class ="simple" href="#">+ Learn more</a>
            </div>
            <div class="toggle-container">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                    sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                    Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
                    commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum,
                    eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.
                    Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
                <a class ="simple" href="{{url('cv')}}">+ My CV</a> </div>
        </div>
        <div class="col-md-9">
          <p style="font-size: 18px">
                The institution operates under the board but running of day to day activities is
                carried out by a Management Team. The team works under the leadership of Clinical
                Officer Incharge and reports to FPCT Health department Head Office - Health Co-
                ordination Office (H.C.O.) at Nkinga. Other members of the management team are Nurse
                Officer Incharge and accountant.
          </p><p style="font-size: 18px">
                HCO is responsible for medical supervisory roles in all FPCT Health Institutions as well
                as making internal auditing, giving recruitment assistance as well as upgrading of our
                staff etcetera.
          </p>
        </div>
    </div>

    <!-- row ends here -->
    <p class="lead" style="text-align: center;font-size: 28px">Meet The Board Members</p>
    <div class="sepContainer1"><!-- --></div>


</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>
<!-- Home Content Part - Box Three ==================================================

@stop