@extends('master')
@section('contents')

<!-- Home Content Part - Slider ==================================================
================================================== -->
<div class="flexslider">
    <ul class="slides">
        <li> <a href="#"><img src="{{asset('images/flexslider/slide5.png')}}" style="height: 480px;width: 100%" alt=""/></a>
            <p class="flex-caption"">Welcome to Nkinga Health Center  Site. This is example of the Caption Title.</p></li>
        <li> <a href="#"><img src="{{asset('images/flexslider/slide5.png')}}" style="height: 480px;width: 100%" alt="" /></a>
            <p class="flex-caption" >Welcome to  Nkinga Health Center  Site. This is example of the Caption Title.</p></li>
        <li> <a href="#"><img src="{{asset('images/flexslider/3.jpg')}}" style="height: 480px;width: 100%" alt="" /></a>
            <p class="flex-caption">Welcome to Nkinga Health Center Site. This is example of the Caption Title.</p>
        </li>
    </ul>
</div>
<!-- Home Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container">
    <div class="info">
        <div class="one_third" style="box-shadow: 0px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
            <h2 style="text-align: center;color: #843534">Our Projects</h2>
            <p>Dotphics is my latest <span class="red">responsive</span> Site Template freebie.
                Dotphics Template is simple and clean template with a lot attention to detail.
                It is suitable for a lot of <span class="green">different</span> business and private uses.</p>
             </div>
        <div class="two_third lastcolumn">
            <div class="two_third" style="box-shadow: 0px 5px 10px  #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                <p style="text-align: center;font-size: 28px; color: #843534">Welcome..!</p>
                <p style="font-size: 17px">Dotphics is my latest <span class="red">responsive</span> Site Template freebie.
                    Dotphics Template is simple and clean template with a lot attention to detail.
                    It is suitable for a lot of <span class="green">different</span> business and private uses.</p>
                </div>
            <div class="one_third lastcolumn" style="box-shadow: 0px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                <h2 style="text-align: center;color: #843534">Latest News</h2>
                <p>Dotphics is my latest <span class="red">responsive</span> Site Template freebie.
                    Dotphics Template is simple and clean template with a lot attention to detail.
                    It is suitable for a lot of <span class="green">different</span> business and private uses.</p>
                </div>
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
        <section class="boxthreeleft"> <img src="{{asset('images/logo.png')}}" style="width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3>Natural beauty</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a class ="simple" href="#">+ Learn more</a> </section>
    </div>
    <!-- one-third column ends here -->
    <div class="one_third" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreecenter"> <img src="{{asset('images/logo.png')}}" style="width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3>Fashion Love</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a class ="simple" href="#">+ Learn more</a> </section>
    </div>
    <!-- one-third column ends here -->
    <div class="one_third lastcolumn" style="box-shadow: 5px 5px 10px #888888;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
        <section class="boxthreeright"> <img src="{{asset('images/logo.png')}}" style="width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
            <h3>Modern Design Interior</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a class ="simple" href="#">+ Learn more</a> </section>
    </div>
    <!-- one-third column ends here -->
</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>

@stop