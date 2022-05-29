@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ Start top-section Area =================-->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <!-- ===============================  About  ======================================== -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-start align-items-center banner-content">
                <div class="col-lg-6">
                    <h1 class="text-white">About Us</h1>
                    <!-- ===============================  About  ======================================== -->
                    <p>{!! Setting()->about_en !!}</p>
                    <!-- ===============================  About  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
    <!--================ Start About Area =================-->
    <section class="about_area lite_bg">
        <style type="text/css">
            .about_area .about_bg{
                background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset(Setting()->AboutPicture) }}');background-repeat:no-repeat;background-size:cover;
                background-size:cover;
                position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
        </style>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <div class="about_details lite_bg">
                        <!-- ===============================  About  ======================================== -->
                        <h2>{!! Setting()->title_about_en !!}</h2>
                        <!-- ===============================  About  ======================================== -->
                        <p>The charity was founded in 2005 by Yuli Pavlovich Lukomskyj of Sokal. His vision was to encourage the next generation to create a bright future for themselves, and for Ukraine. The charity provides high school students with the opportunity to enroll in an essay writing contest on the topic of “Who I am, and what I want to be.” Three levels of awards are provided in various categories. Ceremonies are held each year to provide the winners with cash awards.</p>
                        <p>Over the last 16 years, the charity has largely been funded by the Ukrainian diaspora in Canada, the US, the UK and Australia. The funds were collected by word of mouth through church groups and Ukrainian communities. Many of the donors were elderly Ukrainians. The charity has a Facebook Page and produces paper brochures. Reports, including translations of the childrens’ essays were created to show donors the results, and distributed by email and/or paper mail.</p>
                        
                        <div style="text-align:center;margin:25px auto 0;">
                            <br><iframe width="560" height="315" src="https://www.youtube.com/embed/G0-zRv6Dfng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================ End About Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Thanks for your heart.</p>
                    <h1>Contribute to our charitable work with your donations. Thanks for your heart.</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="{!! url('Causes') !!}" class="primary-btn">donation</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection