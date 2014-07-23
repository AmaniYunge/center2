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
            <h2 style="padding-left: 20px">Board Chair</h2>
            <section class="boxthreecenter"> <img src="{{asset('images/chair.jpg')}}" style="box-shadow: 1px 1px 5px #888888;height: 130px; width: 125px" alt=""/>
                <h3>Rev. Charles Luhanga</h3>
                <p>Rev. Charles Luhanga belongs to FPCT Lowa Mission. Currently, Rev. Luhanga serves as one of the senior church elders in Igunga Parish.</p>
                 </section>
            <div class="toggle-trigger">
                <a class ="simple" href="#">+ Read more</a>
            </div>
            <div class="toggle-container">
                <p>While we value our community by offering them with best health care services, we are facing a number of challenges including shortage of drugs and medical supplies, aging of infrastructures etc. We welcome the involvement of various stakeholders in this challenging but crucial task. Through our work, we will contribute to the improvement of health status in the country.
                    We are grateful for our esteemed staff for their commitment to move forward with this work even for the coming decades!</p>
                <a class ="simple" href="{{url('cv')}}">+ My CV</a> </div>
        </div>
        <div class="col-md-9">
          <p style="font-size: 24px">
              Running of day to day activities of the institution is carried out by a Management Team which is headed by the Doctor in charge who in turn reports to
              FPCT Health department Head Office - Health Co- ordination Office (H.C.O.) at Nkinga. Other members of the management team are
              Matron and Accountant. In addition, there is Administrative and Projects manager who works with the team on part time basis
              operating his duties from HCO. HCO is responsible for medical supervisory roles in all FPCT Health Institutions as well as
              making internal auditing, giving recruitment assistance, supporting project proposals preparations and management as well as
              upgrading of our staff etcetera.
          </p>
        </div>
    </div>

    <!-- row ends here -->
    <p class="lead" style="text-align: center;font-size: 28px">Meet The Board Members</p>
    <div class="sepContainer1"><!-- --></div>
    <p class="lead">The institution operates under the board which meets on quarterly basis in a year and the doctor in charge being its secretary. The board comprises of
        8 members and where the chair is chosen among these members coming outside the health sector. The board members are</p>
    <div class="row">
        <div class="col-md-3">
            <h4>
                Board Chair
            </h4>
            <img src="{{asset('images/chair.jpg')}}" class="img-thumbnail img-rounded img-responsive" style="margin:5px 0px 15px; height: 200px; width: 300px">
            <p>
                Rev. Charles Luhanga
            </p>
            <p style="color: #269abc">
                Senior Church Elder<br/>
                FPCT Igunda Parish
            </p>

        </div>
        <div class="col-md-3">
            <h4>
                Board Secretary
            </h4>
            <img src="{{asset('images/secretary.jpg')}}" class="img-thumbnail img-rounded img-responsive" style="margin:5px 0px 15px; height: 200px; width: 300px">
            <p>
                Dr. Simon Gabriel

            </p>
            <p style="color: #269abc">
                Doctor in charge<br/>
                Lowa Health Centre
            </p>
        </div>
        <div class="col-md-3">
            <h4>
                Invited Member
            </h4>
            <img src="{{asset('images/peter.jpg')}}" class="img-thumbnail img-rounded img-responsive" style="margin:5px 0px 15px; height: 200px; width: 300px">
            <p>
                Mr. Peter Raphael
            </p>
            <p style="color: #269abc">
                Administrative & Projects Manager
            </p>
        </div>
        <div class="col-md-3">
            <h4>
                Member
            </h4>
            <img src="{{asset('images/matron.jpg')}}" class="img-thumbnail img-rounded img-responsive"style="margin:5px 0px 15px; height: 200px; width: 300px">
            <p>
                Ms. Anna Mihayo
            </p>
            <p style="color: #269abc">
                Matron Lowa Health Centre
            </p>
        </div>
    </div>
   <div class="row">
    <div class="col-md-3">
        <h4>
           Member
        </h4>
        <img src="{{asset('images/elias.jpg')}}" class="img-thumbnail img-rounded img-responsive" style="margin:5px 0px 15px; height: 200px; width: 300px">
        <p>
            Ms. Vedastina Simon
        </p>
        <p style="color: #269abc">
            Workers’ representative<br/>
            Lowa Health Centre
        </p>

    </div>
    <div class="col-md-3">
        <h4>
            Invited Member
        </h4>
        <img src="{{asset('images/secretary.jpg')}}" class="img-thumbnail img-rounded img-responsive" style="margin:5px 0px 15px; height: 200px; width: 300px">
        <p>
            Hon. Doto Kadebe

        </p>
        <p style="color: #269abc">
            Politician Representative
        </p>
    </div>
    <div class="col-md-3">
        <h4>
           Member
        </h4>
        <img src="{{asset('images/account.jpg')}}" class="img-thumbnail img-rounded img-responsive" style="margin:5px 0px 15px; height: 200px; width: 300px">
        <p>
            Ms. Theodorah Makanza
        </p>
        <p style="color: #269abc">
            Accountant<br>
            Lowa Health Centre
        </p>
    </div>
    <div class="col-md-3">
        <h4>
            Member
        </h4>
        <img src="{{asset('images/pe.jpg')}}" class="img-thumbnail img-rounded img-responsive"style="margin:5px 0px 15px; height: 200px; width: 300px">
        <p>
            Mwl. Methusela Robert
        </p>
        <p style="color: #269abc">
            Community Representative<br/>
            Lowa Health Centre
        </p>
    </div>
</div>
</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>
<!-- Home Content Part - Box Three ==================================================

@stop