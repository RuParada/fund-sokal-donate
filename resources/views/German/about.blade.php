@extends('German.layout.main')

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
                    <h1 class="text-white">Про нас</h1>
                    <!-- ===============================  About  ======================================== -->
                    <p>{!! Setting()->about_gr !!}</p>
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
                        <h2>{!! Setting()->title_about_gr !!}</h2>
                        <!-- ===============================  About  ======================================== -->
                        <p>Благодійну організацію заснував у 2005 році Юлій Павлович Лукомський із Сокаля. Його баченням було заохотити наступне покоління створити світле майбутнє для себе та України. Благодійна організація надає старшокласникам можливість взяти участь у конкурсі есе на тему «Хто я і ким хочу бути». У різних категоріях передбачено три рівні нагород. Щороку проводяться церемонії для нагородження переможців грошовими винагородами.</p>
                        <p>Протягом останніх 16 років благодійність значною мірою фінансувалася українською діаспорою в Канаді, США, Великобританії та Австралії. Кошти збиралися усно через церковні колективи та українські громади. Багато з жертводавців були літніми українцями. Благодійна організація має сторінку у Facebook і випускає паперові брошури. Звіти, включаючи переклади дитячих есе, були створені, щоб показати донорам результати, і розповсюджувалися електронною поштою та/або паперовою поштою.</p>
                        
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
                    <p class="top_text">Дякуємо вам з усього серця.</p>
                    <h1>Внесіть свій внесок у нашу благодійну роботу своїми пожертвами. Дякуємо вам з усього серця.</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="{!! url('Causes') !!}" class="primary-btn">Зробити пожертву</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection