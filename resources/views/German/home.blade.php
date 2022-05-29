@extends('German.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
	<!--================ start banner Area =================-->
	<section class="home-banner-area relative" id="home" style="max-height:900px" data-parallax="scroll" data-image-src="{{ asset(Setting()->HomePicture) }}">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen justify-content-lg-begin">
				<div class="banner-content col-lg-7">
					<!-- ===============================  Home  ======================================== -->
					@if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
			          {!! $message !!}
			        </div>
                    <?php Session::forget('success');?>
                    @endif
                    <!-- ===============================  Home  ======================================== -->
                    @if ($message = Session::get('error'))
                    <div class="alert alert-success" role="alert">
			          {!! $message !!}
			        </div>
                    <?php Session::forget('error');?>
                    <!-- ===============================  Home  ======================================== -->
                    @endif
					<h1>
						<!-- ===============================  Home  ======================================== -->
						{{ Setting()->title_home_gr }} 
					</h1>
					<!-- ===============================  Home  ======================================== -->
					<h4>{!! Setting()->sub_title_home_gr !!}</h4>
					<a href="{{ url('Causes')}}" class="primary-btn">
						Зробити пожертву
						<i class="ti-angle-right ml-1"></i>
					</a>
					<!-- ===============================  Home  ======================================== -->
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->
	<!--================ Start About Area =================-->
	<section class="about_area lite_bg">
		<!-- ===============================  Home  ======================================== -->
		<style type="text/css">
			.about_area .about_bg{
				background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
				url('{{ asset(Setting()->AboutPicture) }}');background-repeat:no-repeat;background-size:cover;
				background-size:cover;
				position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
		</style>
		<!-- ===============================  Home  ======================================== -->
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-5">
					<div class="about_details lite_bg">
						<!-- ===============================  Home  ======================================== -->
						<h2>{!! Setting()->title_about_gr !!}</h2>
						<!-- ===============================  Home  ======================================== -->
						<p class="mb-0">
							{!! Setting()->content_about_gr !!}
						</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('about') }}" class="primary-btn mt-5">
							Детальніше
							<i class="ti-angle-right ml-1"></i>
						</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 d-lg-block d-none">
					<div class="about_right">
						<div class="video-inner justify-content-center align-items-center d-flex">
							<a id="play-home-video" class="video-play-button" 
							   href="{!! Setting()->video !!}">
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="about_bg d-lg-block d-none"></div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features-area section-gap-top">
		<div class="container">
			
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-compass"></i>
						<h4>Зроби пожертвування</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_gr !!}</p>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-desk"></i>
						<h4>Ви отримаєте натхнення</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_two_gr !!}</p>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<h4>Звіт фонду</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_three_gr !!}</p>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =========================-->
	<!--================ Start Popular Causes Area =================-->
	<section class="popular-cause-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<span> Підтримай школярів із малозабезпечених сімей </span>
						<h2><span>Активний  </span>збір коштів</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home  ======================================== -->
                @foreach($Causes as $Cause)      
				<!--<div class="col-lg-12">-->
				<div class="col-lg-6 col-md-6">
					<div class="card single-popular-cause">
						<div class="card-body">
							<figure>
								<!-- ===============================  Home  ======================================== -->
								<img class="card-img-top img-fluid" src="{!! asset($Cause->image) !!}" alt="Card image cap">
							</figure>
							<div class="card_inner_body">
								<!-- ===============================  Home  ======================================== -->
								 @if(isset($Cause->Category->title))
								 <div class="tag">{{ $Cause->Category->title }}</div>
		                         @else
		                           <div class="tag">No Category</div>
		                         @endif
		                         <!-- ===============================  Home  ======================================== -->
								<h4 class="card-title">{!! substr($Cause->Title_gr, 0, 190) !!}</h4>
								<div class="d-flex justify-content-between raised_goal">
									<!-- ===============================  Home  ======================================== -->
									<p>Зібрано: {!! $Cause->Raised !!}</p>
									<!-- ===============================  Home  ======================================== -->
									<p><span>Потребуєтся: {!! $Cause->Goal !!}</span></p>
									<!-- ===============================  Home  ======================================== -->
								</div>
								<div class="d-flex justify-content-between donation align-items-center">
									<!-- ===============================  Home  ======================================== -->
									<a href="{!! url('Causes') !!}/{!! $Cause->slug !!}" class="primary-btn">Зробити пожертву</a>
									<!-- ===============================  Home  ======================================== -->
									<p><span class="ti-heart mr-1"></span> {!! $Cause->Donors !!} Пожертвувача</p>
									<!-- ===============================  Home  ======================================== -->
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
                <!-- ===============================  Home  ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Popular Causes Area =================-->


	<!--================ Start Upcoming Event Area =================-->
	<section class="upcoming_event_area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Завершені </span> Події</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home Event ======================================== -->
                @foreach($Events as $Event)     
				<div class="col-lg-12">
					<div class="single_upcoming_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<!-- ===============================  Home Event ======================================== -->
									<img class="img-fluid w-100" src="{!! asset($Event->image) !!}" alt="">
									<div class="date">
										<!-- ===============================  Home Event ======================================== -->
										{{ date('M j', strtotime($Event->created_at)) }}
									</div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<!-- ===============================  Home Event ======================================== -->
										<a href="{!! url('Events') !!}/{!! $Event->slug !!}">{!! substr($Event->Title_gr, 0, 190) !!}</a>
									</h3>
									<p>
										<!-- ===============================  Home Event ======================================== -->
										{!! substr($Event->Content_gr, 0, 60) !!}
									</p>
									<!-- ===============================  Home Event ======================================== -->
									<div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv1">
										<div class="single_time">
											<h4 class="days">{!! $Event->Days !!}</h4>
											<p>Days</p>
										</div>
										<div class="single_time">
											<h4 class="hours">{!! $Event->Hours !!}</h4>
											<p>Hours</p>
										</div>
										<div class="single_time">
											<h4 class="minutes">{!! $Event->Minutes !!}</h4>
											<p>Minutes</p>
										</div>
									</div>
									<!-- ===============================  Home Event ======================================== -->
									<a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="primary-btn2">Показати більше</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
                <!-- ===============================  Home Event ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Upcoming Event Area =================-->

	<!--================ Start callto Area =================-->
	<section class="callto-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<p class="top_text">Ви відчуваєте, що хочете якось допомогти цьому проекту?</p>
					<div class="call-wrap mx-auto">
						<h1>Розкажіть про нас</h1>
						<p>Допоможіть людям дізнатися про нас у соціальних мережах, це нам дуже допоможе. Ретвітніть цей сайт на своїй соціальній сторінці, якщо можете.</p>
						<!-- ===============================  Home  ======================================== -->
						<!-- <a href="{{ route('register') }}" class="primary-btn mt-5">
							Sign up
							<i class="ti-angle-right ml-1"></i>
						</a> -->
						<div id="social3" class="social"></div>
						<!-- <div id="social2" class="social">
							<ul>
								<li class="social-facebook" title="Share on Facebook">
									<div class="fb-share-button" data-href="https://sokal.life" data-layout="button_count"></div>
								</li>
								<li class="social-twitter" title="Share on Twitter"></li>
								<li class="social-instagram" title="Share on Instagram"></li>
							</ul>
							
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End callto Area ===========================-->

	<!--================ Start Children Verse Area =================-->
	<section class="children_verse_area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Думки  </span> школярів</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home  ======================================== -->
                     
				<div class="col-lg-3">
					<div class="single_children_verse">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="content_wrapper">
									<p>
										"Я вирішив пов'язати своє життя з хліборобською працею, 
										яка шанувалася з давніх давен... 
										Саме із сільським господарством можна підняти українську 
										економіку до рівня європейської країни. 
										Сільське господарство - саме та золота жила, 
										з якої можна наповнювати бюджет на багато мільярдів доларів"
                                                     
									</p>
									<span class="child_name">Микола (Агроном)</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="single_children_verse">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="content_wrapper">
									<p>
										"Коли я бачу на власні очі, як будується нова країна, 
										без корупції, без нечесних людей, то зрозуміла, 
										що я теж зможу своєю професією зробити вклад в цю нову державу... 
										Я хочу, щоб в моїй країні слова: міліція, прокурор звучали гордо 
										і викликали довіру, щоб люди не боялися закону, 
										а знали, що він на їхньому боці"  
									</p>
									<span class="child_name">Анастасія (Прокурор) </span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="single_children_verse">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="content_wrapper">
									<p>
										"Мені вже третій місяць сниться один і той самий сон: 
										МАЙДАН, крики, щум, вибухи... Через їдкий дим до мене тягнеться рука 
										і хтось волає про допомогу. Я - в білому халаті, 
										з червоним хрестом на грудях рвусь допомогти, 
										кидаюсь рятувати і прокидаюсь..."       
									</p>
									<span class="child_name">Уляна (Лікар) </span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="single_children_verse">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="content_wrapper">
									<p>
										"Я отримав путівку в життя від своїх вчителів. 
										Мої улюблені вчителі залишаються в моєму серці. 
										Вони всі різні. Та є те, що викликає у мене повагу - справедливість, 
										уважність, розуміння, терпіння... 
										А ще, мене бентежить те, чому так мало вчителів-чоловіків..."
									</p>
									<span class="child_name">Андрій (Учитель)</span>
								</div>
							</div>
						</div>
					</div>
				</div>
                
                <!-- ===============================  Home ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Children Verse Area =================-->

	<!--================ Start Home Blog Area =================-->
	<section class="blog-area section-gap-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="home-blog-left">
						<h2>Останні з нашого блогу</h2>
						<p>
							<!-- ===============================  Home Post ======================================== -->
							{!! Setting()->content_blog_gr !!} 
						</p>
						<a href="{{ url('Posts') }}" class="primary-btn2">Показати більше</a>
					</div>
				</div> 
				<!-- ===============================  Home Post ======================================== -->
                @foreach($Posts as $Post)
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb" style="max-height:320px">
						
						<img class="img-fluid" src="{!! asset($Post->image) !!}" alt="{!! substr($Post->Title_gr, 0, 190) !!}">
					</div>
					<div class="single-blog-info">
						<p class="tag">
							  <!-- ===============================  Home Post ======================================== -->
							  @if(isset($Post->Category->title))
                              <span>{{ $Post->Category->title }}</span>
                              @else
                              <span>No Category</span>
                              @endif
                              <!-- ===============================  Home Post ======================================== -->
							<span>{{ date('M j, Y', strtotime($Post->created_at)) }}</span>
						</p>
						<!-- ===============================  Home Post ======================================== -->
						<a href="{!! url('Posts') !!}/{!! $Post->slug !!}">
							<h4>{!! substr($Post->Title_gr, 0, 190) !!}</h4>
						</a>
						<!-- ===============================  Home Post ======================================== -->
						<div class="meta-bottom d-flex">
					     @if(isset($Post->Comments)) 
			             <a class="mr-3"><span class="ti-comments mr-2"></span>{{ count($Post->Comments) }} Comments</a>
			             @else
			             <a class="mr-3"><span class="ti-comments mr-2"></span> 0 Comments</a>
			             @endif
						 <a href="{!! url('Posts') !!}/{!! $Post->slug !!}"> <span class="ti-eye mr-2"></span> Показати більше</a>
						</div>
						<!-- ===============================  Home Post ======================================== -->
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
	<!--================ End Home Blog Area =================-->

	<!--================ Start Gallery Area =================-->
	<section class="instagram-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Наша галерея</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="instagram-slider owl-carousel">
			<!--================ End Gallery Area =================-->
			 @foreach($Gallers as $Gallery)      
			 <!--================ End Gallery Area =================-->    
			<a href="{!! asset($Gallery->image) !!}" class="single-instagram d-block img-pop-up">
				<div class="instagram-img">
					<!--================ End Gallery Area =================-->
					<img src="{!! asset($Gallery->image) !!}">
					<!--================ End Gallery Area =================-->
					<div class="instagram-text">
						<i class=" icon-material-outline-add"></i>
					</div>
				</div>
			</a>
			@endforeach
			<!--================ End Gallery Area =================-->
		</div>
	</section>
	<!--================ End Gallery Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection