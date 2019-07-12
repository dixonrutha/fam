@extends('layouts.app')


@section('content')

 <!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{url('/')}}">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Educational</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- history -->
	<!--<div class="about-page py-5">-->
	<!--	<div class="container py-xl-5 py-lg-3">-->
	<!--		<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Economical-->
				<!--<span class="font-weight-bold">us</span>-->
	<!--		</h3>-->
	<!--		<div class="row about-head-wthree">-->
	<!--			<div class="col-lg-6 left-abw3ls">-->
	<!--			    <img alt="" class="img-fluid" src="images/F_Logo.png">-->
					<!--<img src="images/ap-1.jpg" alt="" class="img-fluid">-->
	<!--			</div>-->
	<!--			<div class="col-lg-6 right-abw3ls mt-lg-0 mt-sm-5 mt-4">-->
	<!--				<h4 class="font-italic border-bottom text-center font-weight-bold pb-3 mb-4">Fam Team</h4>-->
	<!--				<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Kikundi hiki kinajulikana kama Field Engineers Association Mwanza, kwa kifupi FAM. Ni kikundi cha kijamii cha kimaendeleo ya kiuchumi (Community Based Organization.) </p>-->
					
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- //history -->

	<!-- mission -->
	<!--<div class="about-page-2 py-5">-->
	<!--	<div class="container-fluid py-xl-5 py-lg-3">-->
	<!--		<div class="row about-head-wthree-2">-->
	<!--			<div class="col-lg-4 left-abw3ls text-lg-left text-center">-->
	<!--			<img alt="" class="img-fluid" src="images/F_Logo.png">-->
	<!--			</div>-->
	<!--			<div class="col-lg-4 right-abw3ls my-lg-0 my-sm-5 my-4">-->
	<!--				<h4 class="font-italic border-bottom text-center font-weight-bold pb-3 mb-4">Our Vission</h4>-->
	<!--				<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Kushirikiana kufuanya miradi mbali mbali ya kiuchumi na kijamii kwa maendeleo ya kikundi na ustawi wa wanachama. </p>-->
					
	<!--			</div>-->
	<!--			<div class="col-lg-4 left-abw3ls text-lg-left text-center">-->
	<!--				<img alt="" class="img-fluid" src="images/F_Logo.png">-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- //mission -->

	<!-- team -->
	<!--<div class="team py-5">-->
	<!--	<div class="container py-xl-5 py-lg-3">-->
	<!--		<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our-->
	<!--			<span class="font-weight-bold">Instructors</span>-->
	<!--		</h3>-->
	<!--		<div class="row inst-grids pt-md-4">-->
	<!--			<div class="col-md-3 col-6 blog-gd-w3ls">-->
	<!--				<img src="images/team1.jpg" alt=" " class="img-fluid">-->
	<!--				<div class="date-w3">-->
	<!--					<h4>Michael King</h4>-->
	<!--					<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;" class="para-w3-agile">Phasellus sed iaculis</p>-->
	<!--					<div class="agileinfo-social-grids">-->
	<!--						<ul>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fab fa-facebook-f"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fab fa-twitter"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fas fa-rss"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-md-3 col-6 blog-gd-w3ls">-->
	<!--				<img src="images/team2.jpg" alt=" " class="img-fluid">-->
	<!--				<div class="date-w3">-->
	<!--					<h4>Katherin Tresa</h4>-->
	<!--					<p class="para-w3-agile">Phasellus sed iaculis</p>-->
	<!--					<div class="agileinfo-social-grids">-->
	<!--						<ul>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fab fa-facebook-f"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fab fa-twitter"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fas fa-rss"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-md-3 col-6 blog-gd-w3ls  last mt-md-0 mt-sm-5 mt-4">-->
	<!--				<img src="images/team3.jpg" alt=" " class="img-fluid">-->
	<!--				<div class="date-w3">-->
	<!--					<h4>Steven Monroe</h4>-->
	<!--					<p class="para-w3-agile">Phasellus sed iaculis</p>-->
	<!--					<div class="agileinfo-social-grids">-->
	<!--						<ul>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fab fa-facebook-f"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fab fa-twitter"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fas fa-rss"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-md-3 col-6 blog-gd-w3ls last mt-md-0 mt-sm-5 mt-4">-->
	<!--				<img src="images/team4.jpg" alt=" " class="img-fluid">-->
	<!--				<div class="date-w3">-->
	<!--					<h4>Khamok Mokai</h4>-->
	<!--					<p class="para-w3-agile">Phasellus sed iaculis</p>-->
	<!--					<div class="agileinfo-social-grids">-->
	<!--						<ul>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fab fa-facebook-f"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fab fa-twitter"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--							<li>-->
	<!--								<a href="#">-->
	<!--									<i class="fas fa-rss"></i>-->
	<!--								</a>-->
	<!--							</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- //team -->

	<!-- what we do -->
	<div class="why-choose-agile py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-white text-center mb-5">Educational
				<span class="font-weight-bold"></span>
			</h3>
			<div class="row agileits-w3layouts-grid pt-md-4">
				<div class="col-lg-6 services-agile-1">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fab fa-accusoft"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<!--<h4 class="text-capitalize text-white font-weight-bold mb-3">special education</h4>-->
							<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Dhumuni la kikundi cha FAM ni kubadilisha maisha ya wanachama wake kutoka hatua moja kweda nyigingine. Pamoja na kutengeneza utaratibu wa kuwapatia wanachama wake mitaji. Kikundi kinao wajibu wa kuelimisha wanachama wake juu ya elimu ya ujasiliamali ili kuhakikisha wanafanikiwa kwenye shughuli zao za kibiashara.
</p>
						
						</div>
					</div>
				</div>
				<div class="col-lg-6 services-agile-1 my-lg-0 my-5">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fas fa-book"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">Kikundi kinaendesha semina mbali mbali kwa wanachama wake kama ifuatavyo</h4>
							<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Jinsi ya kuandika mpango wa biashara hatua kwa hatua.</p>
								<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Uanzishaji wa Biashara bunifu za kipee zinazolipa haraka zaidi.</p>
									<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Jinsi ya kuongeza mzunguko wa fedha na elimu ya fedha kwa ujumla wake. </p>
							<!--<a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More-->
							<!--	<i class="fas fa-long-arrow-alt-right ml-1"></i>-->
							<!--</a>-->
						</div>
					</div>
				</div>
				<!--<div class="col-lg-4 services-agile-1">-->
				<!--	<div class="row wthree_agile_us">-->
				<!--		<div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
				<!--			<div class="wthree_features_grid text-center p-3 border rounded">-->
				<!--				<i class="fas fa-users"></i>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--		<div class="col-9 agile-why-text-2">-->
							<!--<h4 class="text-capitalize text-white font-weight-bold mb-3">qualified teachers</h4>-->
				<!--			<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Kubuni miradi mbalimbali itakayosimamiwa na kuendeshwa na wanachama wenyewe.</p>-->
							<!--<a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More-->
							<!--	<i class="fas fa-long-arrow-alt-right ml-1"></i>-->
							<!--</a>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
			</div>
			
	</div>
	<!-- //what we do -->

	<!-- what we do -->
	<!--<div class="why-choose-agile py-5">-->
	<!--	<div class="container py-xl-5 py-lg-3">-->
	<!--		<h3 class="title text-capitalize font-weight-light text-white text-center mb-5">Guiding Values-->
	<!--			<span class="font-weight-bold"></span>-->
	<!--		</h3>-->
	<!--		<div class="col-9 agile-why-text-2">-->
	<!--						<h4 style="padding-top: 50px;" class="text-capitalize text-white font-weight-bold mb-3">FAM ni kikundi kinachojiendesha kwa kuzingatia misingi ifuatayo:-</h4>-->
						
						
	<!--					</div>-->
	<!--		<div class="row agileits-w3layouts-grid pt-md-4">-->
	<!--			<div class="col-lg-3 services-agile-1">-->
	<!--				<div class="row wthree_agile_us">-->
	<!--					<div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
	<!--						<div class="wthree_features_grid text-center p-3 border rounded">-->
	<!--							<i class="fab fa-accusoft"></i>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--					<div class="col-9 agile-why-text-2">-->
							<!--<h4 class="text-capitalize text-white font-weight-bold mb-3">special education</h4>-->
	<!--						<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Utii wa sheria, kanuni na taratibu..</p>-->
						
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-lg-3 services-agile-1 my-lg-0 my-5">-->
	<!--				<div class="row wthree_agile_us">-->
	<!--					<div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
	<!--						<div class="wthree_features_grid text-center p-3 border rounded">-->
	<!--							<i class="fas fa-book"></i>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--					<div class="col-9 agile-why-text-2">-->
							<!--<h4 class="text-capitalize text-white font-weight-bold mb-3">full day session</h4>-->
	<!--						<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Haki, Usawa na Uwazi.</p>-->
							<!--<a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More-->
							<!--	<i class="fas fa-long-arrow-alt-right ml-1"></i>-->
							<!--</a>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-lg-3 services-agile-1">-->
	<!--				<div class="row wthree_agile_us">-->
	<!--					<div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
	<!--						<div class="wthree_features_grid text-center p-3 border rounded">-->
	<!--							<i class="fas fa-users"></i>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--					<div class="col-9 agile-why-text-2">-->
							<!--<h4 class="text-capitalize text-white font-weight-bold mb-3">qualified teachers</h4>-->
	<!--						<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Umoja na mshikamano baina wa wanachama.</p>-->
							<!--<a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More-->
							<!--	<i class="fas fa-long-arrow-alt-right ml-1"></i>-->
							<!--</a>-->
	<!--					</div>-->
					
	<!--				</div>-->
	<!--			</div>-->
	<!--				<div class="col-lg-3 services-agile-1 my-lg-0 my-5">-->
	<!--				<div class="row wthree_agile_us">-->
	<!--					<div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
	<!--						<div class="wthree_features_grid text-center p-3 border rounded">-->
	<!--							<i class="fas fa-book"></i>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--					<div class="col-9 agile-why-text-2">-->
							<!--<h4 class="text-capitalize text-white font-weight-bold mb-3">full day session</h4>-->
	<!--						<p style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 15px;letter-spacing: 1px;line-height: 1.9;color: #000;">Utoaji wa huduma kwa wakati.</p>-->
							<!--<a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More-->
							<!--	<i class="fas fa-long-arrow-alt-right ml-1"></i>-->
							<!--</a>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
				
	<!--		</div>-->
			
	<!--</div>-->
	<!-- //what we do -->
	<!-- video and events -->
	<!--<div class="video-choose-agile py-5">-->
	<!--	<div class="container py-xl-5 py-lg-3">-->
	<!--		<div class="row">-->
	<!--			<div class="col-lg-7 video">-->
	<!--				<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our-->
	<!--					<span class="font-weight-bold">video</span>-->
	<!--				</h3>-->
	<!--				<iframe src="https://player.vimeo.com/video/58123228"></iframe>-->
	<!--			</div>-->
	<!--			<div class="col-lg-5 events">-->
	<!--				<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">upcoming-->
	<!--					<span class="font-weight-bold">events</span>-->
	<!--				</h3>-->
	<!--				<div class="events-w3ls">-->
	<!--					<div class="d-flex">-->
	<!--						<div class="col-sm-2 col-3 events-up p-3 text-center">-->
	<!--							<h5 class="text-white font-weight-bold">28-->
	<!--								<span class="border-top font-weight-light pt-2 mt-2">May</span>-->
	<!--							</h5>-->
	<!--						</div>-->
	<!--						<div class="col-sm-10 col-9 events-right">-->
	<!--							<h4 class="text-dark">Admission Fair Spring </h4>-->
	<!--							<ul class="list-unstyled">-->
	<!--								<li class="my-2">-->
	<!--									<i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>-->
	<!--								<li>-->
	<!--									<i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>-->
	<!--							</ul>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--				<div class="d-flex my-4">-->
	<!--					<div class="col-sm-2 col-3 events-up p-3 text-center">-->
	<!--						<h5 class="text-white font-weight-bold">28-->
	<!--							<span class="border-top font-weight-light pt-2 mt-2">May</span>-->
	<!--						</h5>-->
	<!--					</div>-->
	<!--					<div class="col-sm-10 col-9 events-right">-->
	<!--						<h4 class="text-dark">Admission Fair Spring </h4>-->
	<!--						<ul class="list-unstyled">-->
	<!--							<li class="my-2">-->
	<!--								<i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>-->
	<!--							<li>-->
	<!--								<i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--				<div class="d-flex">-->
	<!--					<div class="col-sm-2 col-3 events-up p-3 text-center">-->
	<!--						<h5 class="text-white font-weight-bold">28-->
	<!--							<span class="border-top font-weight-light pt-2 mt-2">May</span>-->
	<!--						</h5>-->
	<!--					</div>-->
	<!--					<div class="col-sm-10 col-9 events-right">-->
	<!--						<h4 class="text-dark">Admission Fair Spring </h4>-->
	<!--						<ul class="list-unstyled">-->
	<!--							<li class="my-2">-->
	<!--								<i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>-->
	<!--							<li>-->
	<!--								<i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- //video and events -->

	<!-- testimonials -->
	<!--<div class="testimonials py-5">-->
	<!--	<div class="container py-xl-5 py-lg-3">-->
	<!--		<h3 class="title text-capitalize font-weight-light text-white text-center mb-5">what our-->
	<!--			<span class="font-weight-bold">people says</span>-->
	<!--		</h3>-->
	<!--		<div class="mis-stage">-->
				<!-- The element to select and apply miSlider to - the class is optional -->
	<!--			<ol class="mis-slider">-->
					<!-- The slider element - the class is optional -->
	<!--				<li class="mis-slide">-->
						<!-- A slide element - the class is optional -->
	<!--					<a href="#" class="mis-container">-->
							<!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
	<!--						<figure>-->
								<!-- Slide content - whatever you want -->
	<!--							<img src="images/t1.jpg" alt=" " class="img-fluid" />-->
	<!--							<figcaption>Carl Lii-->
	<!--								<span>Sed maximus eros quis leo.</span>-->
	<!--							</figcaption>-->
	<!--						</figure>-->
	<!--					</a>-->
	<!--				</li>-->
	<!--				<li class="mis-slide">-->
	<!--					<a href="#" class="mis-container">-->
	<!--						<figure>-->
	<!--							<img src="images/t2.jpg" alt=" " class="img-fluid" />-->
	<!--							<figcaption>Michael Paul-->
	<!--								<span>Sed maximus eros quis leo.</span>-->
	<!--							</figcaption>-->
	<!--						</figure>-->
	<!--					</a>-->
	<!--				</li>-->
	<!--				<li class="mis-slide">-->
	<!--					<a href="link" class="mis-container">-->
	<!--						<figure>-->
	<!--							<img src="images/t3.jpg" alt=" " class="img-fluid" />-->
	<!--							<figcaption>Henry Doe-->
	<!--								<span>Sed maximus eros quis leo.</span>-->
	<!--							</figcaption>-->
	<!--						</figure>-->
	<!--					</a>-->
	<!--				</li>-->
	<!--				<li class="mis-slide">-->
	<!--					<a href="#" class="mis-container">-->
	<!--						<figure>-->
	<!--							<img src="images/t4.jpg" alt=" " class="img-fluid" />-->
	<!--							<figcaption>Laura James-->
	<!--								<span>Sed maximus eros quis leo.</span>-->
	<!--							</figcaption>-->
	<!--						</figure>-->
	<!--					</a>-->
	<!--				</li>-->
	<!--				<li class="mis-slide">-->
	<!--					<a href="#" class="mis-container">-->
	<!--						<figure>-->
	<!--							<img src="images/t5.jpg" alt=" " class="img-fluid" />-->
	<!--							<figcaption>Thomas Carl-->
	<!--								<span>Sed maximus eros quis leo.</span>-->
	<!--							</figcaption>-->
	<!--						</figure>-->
	<!--					</a>-->
	<!--				</li>-->
	<!--				<li class="mis-slide">-->
	<!--					<a href="#" class="mis-container">-->
	<!--						<figure>-->
	<!--							<img src="images/t6.jpg" alt=" " class="img-fluid" />-->
	<!--							<figcaption>Rosy Crisp-->
	<!--								<span>Sed maximus eros quis leo.</span>-->
	<!--							</figcaption>-->
	<!--						</figure>-->
	<!--					</a>-->
	<!--				</li>-->
	<!--				<li class="mis-slide">-->
	<!--					<a href="#" class="mis-container">-->
	<!--						<figure>-->
	<!--							<img src="images/t4.jpg" alt=" " class="img-fluid" />-->
	<!--							<figcaption>Michael Paul-->
	<!--								<span>Sed maximus eros quis leo.</span>-->
	<!--							</figcaption>-->
	<!--						</figure>-->
	<!--					</a>-->
	<!--				</li>-->
	<!--			</ol>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- //testimonials -->

	<!-- news -->
	<!--<div class="news-section py-5">-->
	<!--	<div class="container py-xl-5 py-lg-3">-->
	<!--		<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our lastest-->
	<!--			<span class="font-weight-bold">news</span>-->
	<!--		</h3>-->
	<!--		<div class="row news-grids-w3l pt-md-4">-->
	<!--			<div class="col-md-4 news-grid">-->
	<!--				<a href="blog.html">-->
	<!--					<img src="images/n1.jpg" class="img-fluid" alt="" />-->
	<!--				</a>-->
	<!--				<div class="news-text">-->
	<!--					<div class="news-events-agile event-colo1 py-2 px-3">-->
	<!--						<h5 class="float-left">-->
	<!--							<a href="blog.html" class="text-white">07 May</a>-->
	<!--						</h5>-->
	<!--						<div class="post-img float-right">-->
	<!--							<ul>-->
	<!--								<li>-->
	<!--									<a href="#">-->
	<!--										<i class="far fa-comments text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--								<li class="mx-3">-->
	<!--									<a href="#">-->
	<!--										<i class="far fa-heart text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--								<li>-->
	<!--									<a href="#">-->
	<!--										<i class="fas fa-share text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--							</ul>-->
	<!--						</div>-->
	<!--						<div class="clearfix"></div>-->
	<!--					</div>-->
	<!--					<div class="detail-bottom">-->
	<!--						<h6 class="my-3">-->
	<!--							<a href="blog.html" class="text-dark">-->
	<!--								Eiusmod tempor incididunt ut labore sed do eiusmod-->
	<!--							</a>-->
	<!--						</h6>-->
	<!--						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod-->
	<!--							tempor incididunt ut labore</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-md-4 news-grid my-md-0 my-sm-5 my-4">-->
	<!--				<a href="blog.html">-->
	<!--					<img src="images/n2.jpg" class="img-fluid" alt="" />-->
	<!--				</a>-->
	<!--				<div class="news-text">-->
	<!--					<div class="news-events-agile py-2 px-3">-->
	<!--						<h5 class="float-left">-->
	<!--							<a href="blog.html" class="text-white">07 May</a>-->
	<!--						</h5>-->
	<!--						<div class="post-img float-right">-->
	<!--							<ul>-->
	<!--								<li>-->
	<!--									<a href="#">-->
	<!--										<i class="far fa-comments text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--								<li class="mx-3">-->
	<!--									<a href="#">-->
	<!--										<i class="far fa-heart text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--								<li>-->
	<!--									<a href="#">-->
	<!--										<i class="fas fa-share text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--							</ul>-->
	<!--						</div>-->
	<!--						<div class="clearfix"></div>-->
	<!--					</div>-->
	<!--					<div class="detail-bottom">-->
	<!--						<h6 class="my-3">-->
	<!--							<a href="blog.html" class="text-dark">-->
	<!--								Eiusmod tempor incididunt ut labore sed do eiusmod-->
	<!--							</a>-->
	<!--						</h6>-->
	<!--						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod-->
	<!--							tempor incididunt ut labore</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-md-4 news-grid">-->
	<!--				<a href="blog.html">-->
	<!--					<img src="images/n3.jpg" class="img-fluid" alt="" />-->
	<!--				</a>-->
	<!--				<div class="news-text">-->
	<!--					<div class="news-events-agile event-colo3 py-2 px-3">-->
	<!--						<h5 class="float-left">-->
	<!--							<a href="blog.html" class="text-white">07 May</a>-->
	<!--						</h5>-->
	<!--						<div class="post-img float-right">-->
	<!--							<ul>-->
	<!--								<li>-->
	<!--									<a href="#">-->
	<!--										<i class="far fa-comments text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--								<li class="mx-3">-->
	<!--									<a href="#">-->
	<!--										<i class="far fa-heart text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--								<li>-->
	<!--									<a href="#">-->
	<!--										<i class="fas fa-share text-white"></i>-->
	<!--									</a>-->
	<!--								</li>-->
	<!--							</ul>-->
	<!--						</div>-->
	<!--						<div class="clearfix"></div>-->
	<!--					</div>-->
	<!--					<div class="detail-bottom">-->
	<!--						<h6 class="my-3">-->
	<!--							<a href="blog.html" class="text-dark">-->
	<!--								Eiusmod tempor incididunt ut labore sed do eiusmod-->
	<!--							</a>-->
	<!--						</h6>-->
	<!--						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod-->
	<!--							tempor incididunt ut labore</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- //news -->

	<!-- brands -->
	<!--<div class="brands-w3ls py-md-5 py-4">-->
	<!--	<div class="container py-xl-3">-->
	<!--		<ul class="list-unstyled">-->
	<!--			<li>-->
	<!--				<i class="fab fa-supple"></i>-->
	<!--			</li>-->
	<!--			<li>-->
	<!--				<i class="fab fa-angrycreative"></i>-->
	<!--			</li>-->
	<!--			<li>-->
	<!--				<i class="fab fa-aviato"></i>-->
	<!--			</li>-->
	<!--			<li>-->
	<!--				<i class="fab fa-aws"></i>-->
	<!--			</li>-->
	<!--			<li>-->
	<!--				<i class="fab fa-cpanel"></i>-->
	<!--			</li>-->
	<!--			<li>-->
	<!--				<i class="fab fa-hooli"></i>-->
	<!--			</li>-->
	<!--			<li>-->
	<!--				<i class="fab fa-node"></i>-->
	<!--			</li>-->
	<!--		</ul>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- //brands -->
            
            <footer>
                <div class="container py-4">
                    <div class="row py-xl-5 py-sm-3">
            
                     <div class="col-md-6 contact-agileits-Mitz Group mt-lg-0 ">
                            
            
                          
            
                            <div class="subscribe-w3ls my-xl-5 "  style="color:white">
                                <h6 style="color:white" class=" text-capitalize mb-4">Address</h6>
            
                                <!--<form action="#" class="subscribe_form" method="post"><input class="form-control" name="email"-->
                                <!--        placeholder="Enter your email..." required="" type="email" /><button-->
                                <!--        class="btn btn-primary submit" type="submit">Submit</button></form>-->
                            </div>
                 
            
                            <p  style="color:white" class="para-agileits-Mitz Group "> <i class="far fa-envelope-open  text-center mr-md-4 mr-sm-2 mr-4"></i>P.O.BOX 2617 Mwanza,Tanzania</p>
            
                            <p  style="color:white" class="para-agileits-Mitz Group  my-sm-3 my-2"> <i class="fas fa-phone-volume text-center mr-md-4 mr-sm-2 mr-4"></i>+255743373993</p>
            
                            <p   class="para-agileits-Mitz Group"><a style="color:white" class=""
                                    href="mailto:info@fam.co.tz"> <i class="far fa-envelope-open  text-center mr-md-4 mr-sm-2 mr-4"></i>info@fam.co.tz</a></p>
                        </div>
                            
                            
            
                        <div class="col-md-6 contact-agileits-Mitz Group mt-lg-0 ">
                            
            
                          
            
                            <div class="subscribe-w3ls my-xl-5 ">
                                <h6  style="color:white" class="text-capitalize mb-4">subscribe our newsletter</h6>
            
                                <form action="#" class="subscribe_form" method="post"><input class="form-control" name="email"
                                        placeholder="Enter your email..." required="" type="email" /><button
                                        class="btn btn-primary submit" type="submit">Submit</button></form>
                            </div>
            
                        </div>
                    </div>
                </div>
            
                <div class="copyright-agiles py-3" style="background-color:#fff">
                    <div class="container">
                        <div class="row">
                            <p class="col-lg-8 copy-right-grids text-white text-lg-left text-center mt-lg-1">&copy FAM 2019. All
                                Rights Reserved | Design by <a href="https://mitzinnovations.com/" target="_blank">MitzGroup</a></p>
                            <!-- social icons -->
            
                            <div class="social-icons text-lg-right text-center col-lg-4 mt-lg-0 mt-3">
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li class="mx-2"></li>
                                    <li></li>
                                    <li class="ml-2"></li>
                                </ul>
                            </div>
                            <!-- //social icons -->
                        </div>
                    </div>
                </div>
            </footer>
@endsection