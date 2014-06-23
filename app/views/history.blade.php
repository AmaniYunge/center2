@extends('master')
@section('contents')

<!-- About Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container">
    <div class="two_third">
        <section class="aboutoneleft">
            <h2>Historical Background</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <img class="raster" src="{{asset('images/raster.png')}}" alt=""/>
            <p class="quote" style="font-size: 14px">Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p>
        </section>

    </div>
    <!-- end two-third column ends here -->
    <div class="one_third lastcolumn">
        <section class="aboutoneright">
            <h2 style="text-align: center">Our Latest Work</h2>
            <img src="{{asset('images/logo.png')}}" style="width: 100%; box-shadow: 1px 1px 5px #888888" alt=""/>
        </section>
    </div>
    <!-- end one-third column ends here -->
</div>
<!-- container ends here -->
<!-- About Content Part - Box Two ==================================================
================================================== -->
<div class="container">
    <div class="sepContainer1"></div>
    <!-- Toggle -->
    <h2>Our Motivation</h2>
    <div class="toggle-trigger">Mission</div>
    <div class="toggle-container">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
    </div>
    <div class="toggle-trigger">Vission</div>
    <div class="toggle-container">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
    </div>
    <div class="toggle-trigger">Core Values</div>
    <div class="toggle-container">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
    </div>
    <div class="toggle-trigger">Anything else</div>
    <div class="toggle-container">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
    </div>
    <!-- ENDS Toggle -->
</div>
<div class="blankSeparator1"></div>

@stop