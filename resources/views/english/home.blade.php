@extends('english.layout.main')

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
						{{ Setting()->title_home_en }} 
					</h1>
					<!-- ===============================  Home  ======================================== -->
					<h4>{!! Setting()->sub_title_home_en !!}</h4>
					<a href="{{ url('Causes')}}" class="primary-btn">
						Donate
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
						<h2>{!! Setting()->title_about_en !!}</h2>
						<!-- ===============================  Home  ======================================== -->
						<p class="mb-0">
							{!! Setting()->content_about_en !!}
						</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('about') }}" class="primary-btn mt-5">
							Read more
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
						<h4>Give Donation</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_en !!}</p>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-desk"></i>
						<h4>Get inspired</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_two_en !!}</p>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<h4>Fund report</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_three_en !!}</p>
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
						<span> Support schoolchildren from low-income families </span>
						<h2><span>Active </span>Fundraising</h2>
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
								<h4 class="card-title">{!! substr($Cause->Title_en, 0, 190) !!}</h4>
								<div class="d-flex justify-content-between raised_goal">
									<!-- ===============================  Home  ======================================== -->
									<p>Raised: {!! $Cause->Raised !!}</p>
									<!-- ===============================  Home  ======================================== -->
									<p><span>Goal: {!! $Cause->Goal !!}</span></p>
									<!-- ===============================  Home  ======================================== -->
								</div>
								<div class="d-flex justify-content-between donation align-items-center">
									<!-- ===============================  Home  ======================================== -->
									<a href="{!! url('Causes') !!}/{!! $Cause->slug !!}" class="primary-btn">Donate</a>
									<!-- ===============================  Home  ======================================== -->
									<p><span class="ti-heart mr-1"></span> {!! $Cause->Donors !!} Donors</p>
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
						<h2><span>Completed</span> Events</h2>
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
										<a href="{!! url('Events') !!}/{!! $Event->slug !!}">{!! substr($Event->Title_en, 0, 190) !!}</a>
									</h3>
									<p>
										<!-- ===============================  Home Event ======================================== -->
										{!! substr($Event->Content_en, 0, 60) !!}
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
									<a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="primary-btn2">Learn More</a>
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
					<p class="top_text">Do you feel like you want to help this project somehow?</p>
					<div class="call-wrap mx-auto">
						<h1>Tell about us</h1>
						<p>Help people to find out about us on social networks, it will help us a lot. Retweet this site on your social page if you can.</p>
						<!-- ===============================  Home  ======================================== -->
						<!-- <a href="{{ route('register') }}" class="primary-btn mt-5">
							Sign up
							<i class="ti-angle-right ml-1"></i>
						</a> -->
						<div id="social2" class="social"></div>
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
						<h2><span>Schoolchildren </span> Thoughts</h2>
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
										"I have decided to connect my life with farming work, which has been revered since ancient times ... It is with agriculture that the Ukrainian economy can be raised to the level of a European country. "
                                                     
									</p>
									<span class="child_name">Mykola (Agronomist)</span>
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
										"When I see with my own eyes how a new country is being built,
										without corruption, without dishonest people, it is clear
										that I will also be able to contribute to this new state with my profession ...
										I want the words: police, prosecutor to sound proud in my country
										and caused confidence that the people should not fear the law,
										and they knew he was on their side. "
									</p>
									<span class="child_name">Anastasia (Prosecutor) </span>
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
										"I have been dreaming the same dream for three months now:
										Maidan, screams, noise, explosions ... My hand reaches out through the acrid smoke
										and someone cries out for help. I'm in a white coat,
										with a red cross on my chest I'm eager to help,
										I rush to the rescue and wake up ... "  
									</p>
									<span class="child_name">Ulyana (Doctor) </span>
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
										"I received a ticket to life from my teachers.
										My favorite teachers remain in my heart.
										They are all different. But there is something that commands my respect - justice,
										attentiveness, understanding, patience ...
										And I'm confused by why there are so few male teachers ... "
									</p>
									<span class="child_name">Andrew (Teacher)</span>
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
						<h2>Latest From
							Our Blog </h2>
						<p>
							<!-- ===============================  Home Post ======================================== -->
							{!! Setting()->content_blog_en !!} 
						</p>
						<a href="{{ url('Posts') }}" class="primary-btn2">Show more</a>
					</div>
				</div> 
				<!-- ===============================  Home Post ======================================== -->
                @foreach($Posts as $Post)
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb" style="max-height:320px">
						
						<img class="img-fluid" src="{!! asset($Post->image) !!}" alt="{!! substr($Post->Title_en, 0, 190) !!}">
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
							<h4>{!! substr($Post->Title_en, 0, 190) !!}</h4>
						</a>
						<!-- ===============================  Home Post ======================================== -->
						<div class="meta-bottom d-flex">
					     @if(isset($Post->Comments)) 
			             <a class="mr-3"><span class="ti-comments mr-2"></span>{{ count($Post->Comments) }} Comments</a>
			             @else
			             <a class="mr-3"><span class="ti-comments mr-2"></span> 0 Comments</a>
			             @endif
						 <a href="{!! url('Posts') !!}/{!! $Post->slug !!}"> <span class="ti-eye mr-2"></span> Show more</a>
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
						<h2><span>Our Gallery</span></h2>
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