@extends('layouts.app')


@section('content')



<style>
*{ 
  font-family:tahoma;
}
/* .testheight Not required - unless testing ;) */
.testheight {
  height:1200px;
  font-size:20px;
  text-align:center;
  padding:100px 20px;
}
.scrolltop {
	display:none;
	width:100%;
	margin:0 auto;
	position:fixed;
	bottom:20px;
	right:10px;	
}
.scroll {
	position:absolute;
	right:20px;
	bottom:20px;
	background:#b2b2b2;
	background:rgba(178,178,178,0.7);
	padding:20px;
	text-align: center;
	margin: 0 0 0 0;
	cursor:pointer;
	transition: 0.5s;
	-moz-transition: 0.5s;
	-webkit-transition: 0.5s;
	-o-transition: 0.5s; 		
}
.scroll:hover {
	background:rgba(178,178,178,1.0);
	transition: 0.5s;
	-moz-transition: 0.5s;
	-webkit-transition: 0.5s;
	-o-transition: 0.5s; 		
}
.scroll:hover .fa {
	padding-top:-10px;
}
.scroll .fa {
	font-size:30px;
	margin-top:-5px;
	margin-left:1px;
	transition: 0.5s;
	-moz-transition: 0.5s;
	-webkit-transition: 0.5s;
	-o-transition: 0.5s; 	
}
</style>


 <div class="about py-5">
     <div class="banner-agile">
            <ul class="slider">m
                <li class="active">
                    <div class="banner-w3ls-1"></div>
                </li>
                <li>
                    <div class="banner-w3ls-2"></div>
                </li>
                <li>
                    <div class="banner-w3ls-3"></div>
                </li>  
                <li>
                    <div class="banner-w3ls-4"></div>
                </li>
                <li class="prev">
                    <div class="banner-w3ls-5"></div>
                </li>
            </ul>
        
            <ul class="pager">
                <li class="active" data-index="0"></li>
                <li data-index="1"></li>
                <li data-index="2"></li>
                <li data-index="3"></li>
                <li data-index="4"></li>
            </ul>
        
            <div class="banner-text-posi-w3ls">
                <div class="banner-text-whtree">
                    <h3 class="text-capitalize text-white p-4">It&rsquo;s more than just<b>&nbsp;Maendeleo kwa wote</b></h3>
                    <a class="button-agiles text-capitalize text-white mt-sm-5 mt-4" href="about.html">read more</a>
                </div>
            </div>

        </div>
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Welcome to <span class="font-weight-bold">FAM Team</span></h3>
 <div class="row pt-md-4">
                <div class="col-lg-6 about_right">
                    <h3 class="text-capitalize text-right font-weight-light font-italic">About <span class="font-weight-bold">FAM</span></h3>

                    <p>FAM ni kikundi cha hiari chenye lengo la kufanya shughuli mbalimbali za kijamii na kiuchumi kwa ustawi wa wanachama wake.</p>

                    <p>Kikundi hiki kinaendeshwa kwa mujbu wa katiba na kanuni mbalimbali ambazo wanachama wake wamejiwekea.</p>
                    <!-- <div class="about_left-list">
<h6 class="mb-lg-3 mb-2 font-weight-bold text-dark">Benefits Of Working With Gold Stone Law Chambers</h6>

<ul class="list-unstyled">
	<li class="mb-2">Duis aute irure dolor in reprehe</li>
	<li class="mb-2">unt in culpa qui officia deserunt</li>
	<li class="mb-2">Nemo enim ipsam voluptatem quia</li>
	<li class="mb-2">quis nostrum exercitationem ullam</li>
	<li class="mb-2">corporis suscipit laboriosam</li>
</ul>
</div>--></div> 
<div class="col-lg-6 left-img-agikes mt-lg-0 mt-sm-4 mt-3 text-right"><img alt="" class="img-fluid"
                    src="images/F_Logo.png" />
                <div class="about-bottom text-center p-sm-5 p-4">
                    <!--<ul>
            	<li>
            	<h5>60+</h5>
            
            	<p class="text-dark font-weight-bold"></p>
            	</li>
            	<li>
            	<h5>2000+</h5>
            
            	<p class="text-dark font-weight-bold"></p>
            	</li>
            	<li>
            	<h5>80+</h5>
            
            	<p class="text-dark font-weight-bold"></p>
            	</li>
            </ul>-->
                </div>
            </div>
            </div>
            </div>
            </div>
            <!-- //about -->
            <!-- Stats-->
            
            <div class="stats-Mitz Group py-5">
                <div class="container py-xl-5 py-lg-3">
                    <div class="stats-info">
                        <h3 class="title text-capitalize font-weight-light text-white text-center mb-5">OUR TEAM BY THE NUMBERS:
                        </h3>
            
                        <div class="row">
                            <div class="col-md-3 col-6 stats-grid-w3-agile text-center px-xl-5 px-3">
                                <div class="numscroller font-weight-bold my-2" data-delay=".5" data-increment="1" data-max="100"
                                    data-min="0" data-slno="1">100</div>
            
                                <p class="text-uppercase text-white border-top pt-4 mt-3">Expected members</p>
                            </div>
            
                            <div class="col-md-3 col-6 stats-grid-w3-agile text-center  px-xl-5 px-3">
                                <div class="numscroller font-weight-bold my-2" data-delay=".5" data-increment="1" data-max="20"
                                    data-min="0" data-slno="1">20</div>
            
                                <p class="text-uppercase text-white border-top pt-4 mt-3">approved members</p>
                            </div>
            
                            <div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
                                <div class="numscroller font-weight-bold my-2" data-delay=".5" data-increment="1" data-max="7"
                                    data-min="0" data-slno="1">7</div>
            
                                <p class="text-uppercase text-white border-top pt-4 mt-3">certified members</p>
                            </div>
                            <!--
            <div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
            <div class="numscroller font-weight-bold my-2" data-delay=".5" data-increment="1" data-max="1200" data-min="0" data-slno="1">1200</div>
            
            <p class="text-uppercase text-white border-top pt-4 mt-3">graduate students</p>
            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Stats -->
            <!-- what we do -->
            
            <!--<div class="why-choose-agile py-5">-->
            <!--    <div class="container py-xl-5 py-lg-3">-->
            <!--        <h3 class="title text-capitalize font-weight-light text-white text-center mb-5">PRACTICE AREAS</h3>-->
            
            <!--        <div class="row agileits-Mitz Group-grid pt-md-4">-->
            <!--            <div class="col-lg-4 services-agile-1">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
                                <!--<div class="col-9 agile-why-text-2">-->
                                <!--    <h4 class="text-capitalize text-white font-weight-bold mb-3">Impaired Driving</h4>-->
            
                                <!--    <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
                                <!--    <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            
            <!--            <div class="col-lg-4 services-agile-1 my-lg-0 my-5">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
                                <!--<div class="col-9 agile-why-text-2">-->
                                <!--    <h4 class="text-capitalize text-white font-weight-bold mb-3">Domestic Violence</h4>-->
            
                                <!--    <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
                                <!--    <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            
            <!--            <div class="col-lg-4 services-agile-1">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
                                <!--<div class="col-9 agile-why-text-2">-->
                                <!--    <h4 class="text-capitalize text-white font-weight-bold mb-3">Drug Offences</h4>-->
            
                                <!--    <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
                                <!--    <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            
            <!--        <div class="row agileits-Mitz Group-grid mt-5">-->
            <!--            <div class="col-lg-4 services-agile-1">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
                                <!--<div class="col-9 agile-why-text-2">-->
                                <!--    <h4 class="text-capitalize text-white font-weight-bold mb-3">Property Crime</h4>-->
            
                                <!--    <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
                                <!--    <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            
            <!--            <div class="col-lg-4 services-agile-1  my-lg-0 my-5">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
            <!--                    <div class="col-9 agile-why-text-2">-->
            <!--                        <h4 class="text-capitalize text-white font-weight-bold mb-3">Traffic Offences</h4>-->
            
            <!--                        <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
            <!--                        <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            
            <!--            <div class="col-lg-4 services-agile-1">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
                                <!--<div class="col-9 agile-why-text-2">-->
                                <!--    <h4 class="text-capitalize text-white font-weight-bold mb-3">Assaults &amp; Threats</h4>-->
            
                                <!--    <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
                                <!--    <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            
            <!--        <div class="row agileits-Mitz Group-grid mt-5">-->
            <!--            <div class="col-lg-4 services-agile-1">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
                                <!--<div class="col-9 agile-why-text-2">-->
                                <!--    <h4 class="text-capitalize text-white font-weight-bold mb-3">Fraud</h4>-->
            
                                <!--    <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
                                <!--    <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            
            <!--            <div class="col-lg-4 services-agile-1  my-lg-0 my-5">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
                                <!--<div class="col-9 agile-why-text-2">-->
                                <!--    <h4 class="text-capitalize text-white font-weight-bold mb-3">Juvenile Crime</h4>-->
            
                                <!--    <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
                                <!--    <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            
            <!--            <div class="col-lg-4 services-agile-1">-->
            <!--                <div class="row wthree_agile_us">-->
            <!--                    <div class="col-lg-3 col-md-2 col-3  agile-why-text">-->
            <!--                        <div class="wthree_features_grid text-center p-3 border rounded"></div>-->
            <!--                    </div>-->
            
                                <!--<div class="col-9 agile-why-text-2">-->
                                <!--    <h4 class="text-capitalize text-white font-weight-bold mb-3">Theft Crimes</h4>-->
            
                                <!--    <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>-->
                                <!--    <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More </a>-->
                                <!--</div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- //what we do -->
            <!-- course-->
            
            <div class="classes py-5">
                <div class="container py-xl-5 py-lg-3">
                    <h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">MEET OUR <span
                            class="font-weight-bold">CURRENT TEAM</span></h3>
            
                    <div class="row pt-4">
                        <div class="col-lg-4 col-news-top text-center">
                            <!-- Left to right -->
                            <!-- normal -->
                            <div class="ih-item circle effect16 left_to_right mx-auto">
                                <div class="img"><a href="language.html"><img alt="img" style="height: 100%;width: 100%;"   class="img-fluid rounded-circle"
                                            src="{{asset('images/Chacha.png')}}" /> </a>
                                            </div>
            
                                
                            </div>
            
                            <h6 class="small-heading text-capitalize text-center mt-4"><a class="text-dark" href="#">John Chacha
                                </a></h6>
                                 <p><a href="{{url('about')}}">is the Chairperson of FAM. </a></p>
                            <!-- end normal -->
                            <!-- end Left to right -->
                        </div>
            
                        <div class="col-lg-4 col-news-top text-center my-lg-0 my-sm-5 my-4">
                            <!-- Left to right -->
                            <!-- normal -->
                            <div class="ih-item circle effect16 left_to_right mx-auto">
                                <div class="img"><a href="{{url('about')}}"><img alt="img"  style="height: 100%;width: 100%;"  class="img-fluid rounded-circle" src="{{asset('images/peter.png')}}" />
                                    </a></div>
            
                            </div>
            
                            <h6 class="small-heading text-capitalize text-center mt-4"><a class="text-dark" href="#">Peter Matiko
                                </a></h6>
                                  <p><a href="{{url('about')}}">Peter Matiko as a general secretary of the team.</a></p>
                            <!-- end normal -->
                            <!-- end Left to right -->
                        </div>
            
                        <div class="col-lg-4 col-news-top text-center">
                            <!-- Left to right -->
                            <!-- normal -->
                            <div class="ih-item circle effect16 left_to_right mx-auto">
                                <div class="img"><a href="{{url('about')}}"><img alt="img"  style="height: 100%;width: 100%;"   class="img-fluid rounded-circle" src="{{asset('images/revo.png')}}" />
                                    </a></div>
            
                                
                            </div>
            
                            <h6 class="small-heading text-capitalize text-center mt-4"><a class="text-dark" href="#">Revocatus Pius
                                </a></h6>
                                  <p><a href="{{url('about')}}">Revocatus is the Treasurer</a></p>
                            <!-- end normal -->
                            <!-- end Left to right -->
                        </div>
                    </div>
            
                    <div class="row mt-5">
                        <div class="col-lg-4 col-news-top text-center">
                            <!-- Left to right -->
                            <!-- normal -->
                            <div class="ih-item circle effect16 left_to_right mx-auto">
                                <div class="img"><a href="{{url('about')}}"><img alt="img" style="height: 100%;width: 100%;"   class="img-fluid rounded-circle" src="{{asset('images/muhikwa.png')}}" />
                                    </a></div>
            
                               
                            </div>
            
                            <h6 class="small-heading text-capitalize text-center mt-4"><a class="text-dark" href="{{url('about')}}">Geofrey Muhikwa
                                </a></h6>
                                <p><a href="{{url('about')}}">Geofrey Muhikwa has been Helping in Design </a></p>
                            <!-- end normal -->
                            <!-- end Left to right -->
                        </div>
            
                        <div class="col-lg-4 col-news-top text-center  my-lg-0 my-sm-5 my-4">
                            <!-- Left to right -->
                            <!-- normal -->
                            <div class="ih-item circle effect16 left_to_right mx-auto">
                                <div class="img"><a href="{{url('about')}}"><img alt="img" style="height: 100%;width: 100%;"   class="img-fluid rounded-circle" src="{{asset('images/Eliah.png')}}" />
                                    </a></div>
            
                              
                            </div>
            
                            <h6 class="small-heading text-capitalize text-center mt-4"><a class="text-dark" href="#">Elia Myaniko
                                </a></h6>
                                   <p><a href="{{url('about')}}">Elia has been helping in coordinating team.</a></p>
                            <!-- end normal -->
                            <!-- end Left to right -->
                        </div>
            
                        <div class="col-lg-4 col-news-top text-center">
                            <!-- Left to right -->
                            <!-- normal -->
                            <div class="ih-item circle effect16 left_to_right mx-auto">
                                <div class="img"><a href="{{url('about')}}"><img alt="img" style="height: 100%;width: 100%;"    class="img-fluid rounded-circle" src="{{asset('images/pj.png')}}" />
                                    </a></div>
            
                               
                            </div>
            
                            <h6 class="small-heading text-capitalize text-center mt-4"><a class="text-dark" href="#">Paul Juma </a>
                            </h6>
                            <!-- end normal -->
                            <!-- end Left to right -->
                        </div>
                         
                    </div>
                    <div class="row">
                          <div class="col-lg-4 col-news-top text-center">
                            <!-- Left to right -->
                            <!-- normal -->
                            <div class="ih-item circle effect16 left_to_right mx-auto">
                                <div class="img"><a href="{{url('about')}}"><img alt="img" style="height: 100%;width: 100%;"    class="img-fluid rounded-circle" src="{{asset('images/steve1.png')}}" />
                                    </a></div>
            
                               
                            </div>
            
                            <h6 class="small-heading text-capitalize text-center mt-4"><a class="text-dark" href="#">Steven Keema </a>
                            </h6>
                            <!-- end normal -->
                            <!-- end Left to right -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- //course -->
            <!-- video and events -->
            
            <div class="video-choose-agile py-5">
                <div class="container py-xl-5 py-lg-3">
                    <div class="row">
                        <div class="col-lg-7 video">
                            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our <span
                                    class="font-weight-bold">video</span></h3>
                            <iframe src=""></iframe>
                        </div>
            
                        <div class="col-lg-5 events">
                            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Our Latest <span
                                    class="font-weight-bold">News </span></h3>
            
                            <div class="events-w3ls">
                                <div class="d-flex">
                                    <div class="col-sm-2 col-3 events-up p-3 text-center">
                                        <h5 class="text-white font-weight-bold">28 July:<span
                                                class="border-top font-weight-light pt-2 mt-2"></span></h5>
                                    </div>
            
                                    <div class="col-sm-10 col-9 events-right">
                                       
            
                                        <ul class="list-unstyled">
                                            <li class="my-2">  <a href="images/fam_agenda.pdf" target="_blank">
                                        Kikao cha mwezi cha kikundi<br>

<span>Siku: 28/07/19,</span><br>
<span>Muda: 10:30 Asubuhi.</span><br>
<span>Mahali: Taiwani Hotel.</a></span>
        </li>
                                       
                                        </ul>
                                    </div>
                                </div>
                            </div>
            
                            <div class="d-flex">
                                <div class="col-sm-2 col-3 events-up p-3 text-center">
                                    <h5 class="text-white font-weight-bold">20 July:   <span
                                            class="border-top font-weight-light pt-2 mt-2"></span></h5>
                                </div>
            
                                <div class="col-sm-10 col-9 events-right">
                                    <h4 class="text-dark"></h4>
            
                                    <ul class="list-unstyled">
                                        <li class="my-2"> Ziara kwenye kitega uchumi cha wanakikundi</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //video and events -->
            {{--<!-- testimonials -->--}}
            {{----}}
            {{--<div class="testimonials py-5">--}}
                {{--<div class="container py-xl-5 py-lg-3">--}}
                    {{--<h3 class="title text-capitalize font-weight-light text-white text-center mb-5">what our <span--}}
                            {{--class="font-weight-bold">people says</span></h3>--}}
            {{----}}
                    {{--<div class="mis-stage">--}}
                        {{--<!-- The element to select and apply miSlider to - the class is optional -->--}}
                        {{--<ol class="mis-slider">--}}
                            {{--<!-- The slider element - the class is optional -->--}}
                            {{--<li class="mis-slide">--}}
                                {{--<!-- A slide element - the class is optional -->--}}
                                {{--<a class="mis-container" href="#">--}}
                                    {{--<!-- A slide container - this element is optional, if absent the plugin adds it automatically -->--}}
                                {{--</a>--}}
            {{----}}
                                {{--<figure>--}}
                                    {{--<a class="mis-container" href="#">--}}
                                        {{--<!-- Slide content - whatever you want --><span>Sed maximus eros quis leo.Sed maximus eros--}}
                                            {{--quis leo.Sed maximus eros quis leo.Sed maximus eros quis leo.Sed maximus eros quis--}}
                                            {{--leo.Sed maximus eros quis leo.</span> </a>--}}
            {{----}}
                                    {{--<figcaption><a class="mis-container" href="#">Carl Lii <span>Sed maximus eros quis leo.</span>--}}
                                        {{--</a></figcaption>--}}
                                    {{--<a class="mis-container" href="#"> </a>--}}
                                {{--</figure>--}}
                                {{--<a class="mis-container" href="#"> </a>--}}
                            {{--</li>--}}
                            {{--<li class="mis-slide">--}}
                                {{--<figure><a class="mis-container" href="#"><img alt=" " class="img-fluid" src="images/t2.jpg" /> </a>--}}
                                    {{--<figcaption><a class="mis-container" href="#">Michael Paul <span>Sed maximus eros quis--}}
                                                {{--leo.</span> </a></figcaption>--}}
                                    {{--<a class="mis-container" href="#"> </a>--}}
                                {{--</figure>--}}
                            {{--</li>--}}
                            {{--<li class="mis-slide">--}}
                                {{--<figure><a class="mis-container" href="link"><img alt=" " class="img-fluid" src="images/t3.jpg" />--}}
                                    {{--</a>--}}
                                    {{--<figcaption><a class="mis-container" href="link">Henry Doe <span>Sed maximus eros quis--}}
                                                {{--leo.</span> </a></figcaption>--}}
                                    {{--<a class="mis-container" href="link"> </a>--}}
                                {{--</figure>--}}
                            {{--</li>--}}
                            {{--<li class="mis-slide">--}}
                                {{--<figure><a class="mis-container" href="#"><img alt=" " class="img-fluid" src="images/t4.jpg" /> </a>--}}
                                    {{--<figcaption><a class="mis-container" href="#">Laura James <span>Sed maximus eros quis--}}
                                                {{--leo.</span> </a></figcaption>--}}
                                    {{--<a class="mis-container" href="#"> </a>--}}
                                {{--</figure>--}}
                            {{--</li>--}}
                            {{--<li class="mis-slide">--}}
                                {{--<figure><a class="mis-container" href="#"><img alt=" " class="img-fluid" src="images/t5.jpg" /> </a>--}}
                                    {{--<figcaption><a class="mis-container" href="#">Thomas Carl <span>Sed maximus eros quis--}}
                                                {{--leo.</span> </a></figcaption>--}}
                                    {{--<a class="mis-container" href="#"> </a>--}}
                                {{--</figure>--}}
                            {{--</li>--}}
                            {{--<li class="mis-slide">--}}
                                {{--<figure><a class="mis-container" href="#"><img alt=" " class="img-fluid" src="images/t6.jpg" /> </a>--}}
                                    {{--<figcaption><a class="mis-container" href="#">Rosy Crisp <span>Sed maximus eros quis leo.</span>--}}
                                        {{--</a></figcaption>--}}
                                    {{--<a class="mis-container" href="#"> </a>--}}
                                {{--</figure>--}}
                            {{--</li>--}}
                            {{--<li class="mis-slide">--}}
                                {{--<figure><a class="mis-container" href="#"><img alt=" " class="img-fluid" src="images/t4.jpg" /> </a>--}}
                                    {{--<figcaption><a class="mis-container" href="#">Michael Paul <span>Sed maximus eros quis--}}
                                                {{--leo.</span> </a></figcaption>--}}
                                    {{--<a class="mis-container" href="#"> </a>--}}
                                {{--</figure>--}}
                            {{--</li>--}}
                        {{--</ol>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- //testimonials -->--}}
            {{--<!-- news -->--}}
            
            <div class="news-section py-5">
                <div class="container py-xl-5 py-lg-3">
                    <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our  <span
                            class="font-weight-bold">Event</span></h3>
            
                    <div class="row news-grids-w3l pt-md-4">
                        <div class="col-md-4 news-grid"><a href="blog.html"><img alt="" class="img-fluid" src="images/n1.jpg" />
                            </a>
            
                            <div class="news-text">
                                <div class="news-events-agile event-colo1 py-2 px-3">
                                    <h5 class="float-left"><a class="text-white" href="blog.html">07 May</a></h5>
            
                                    <div class="post-img float-right">
                                        <ul>
                                            <li></li>
                                            <li class="mx-3"></li>
                                            <li></li>
                                        </ul>
                                    </div>
            
                                    <div class="clearfix"></div>
                                </div>
            
                                <!--<div class="detail-bottom">-->
                                <!--    <h6 class="my-3"><a class="text-dark" href="blog.html">Eiusmod tempor incididunt ut labore sed-->
                                <!--            do eiusmod </a></h6>-->
            
                                <!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut-->
                                <!--        labore sed do eiusmod tempor incididunt ut labore</p>-->
                                <!--</div>-->
                            </div>
                        </div>
            
                        <div class="col-md-4 news-grid my-md-0 my-sm-5 my-4"><a href="blog.html"><img alt="" class="img-fluid"
                                    src="images/n2.jpg" /> </a>
            
                            <div class="news-text">
                                <div class="news-events-agile py-2 px-3">
                                    <h5 class="float-left"><a class="text-white" href="blog.html">07 May</a></h5>
            
                                    <div class="post-img float-right">
                                        <ul>
                                            <li></li>
                                            <li class="mx-3"></li>
                                            <li></li>
                                        </ul>
                                    </div>
            
                                    <div class="clearfix"></div>
                                </div>
            
                                <!--<div class="detail-bottom">-->
                                <!--    <h6 class="my-3"><a class="text-dark" href="blog.html">Eiusmod tempor incididunt ut labore sed-->
                                <!--            do eiusmod </a></h6>-->
            
                                <!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut-->
                                <!--        labore sed do eiusmod tempor incididunt ut labore</p>-->
                                <!--</div>-->
                            </div>
                        </div>
            
                        <div class="col-md-4 news-grid"><a href="blog.html"><img alt="" class="img-fluid" src="images/n3.jpg" />
                            </a>
            
                            <div class="news-text">
                                <div class="news-events-agile event-colo3 py-2 px-3">
                                    <h5 class="float-left"><a class="text-white" href="blog.html">07 May</a></h5>
            
                                    <div class="post-img float-right">
                                        <ul>
                                            <li></li>
                                            <li class="mx-3"></li>
                                            <li></li>
                                        </ul>
                                    </div>
            
                                    <div class="clearfix"></div>
                                </div>
            
                                <!--<div class="detail-bottom">-->
                                <!--    <h6 class="my-3"><a class="text-dark" href="blog.html">Eiusmod tempor incididunt ut labore sed-->
                                <!--            do eiusmod </a></h6>-->
            
                                <!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut-->
                                <!--        labore sed do eiusmod tempor incididunt ut labore</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //news -->
            <!-- brands -->
            
            <div class="brands-w3ls py-md-5 py-4">
                <div class="container py-xl-3">
                    <ul class="list-unstyled">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <!-- //brands -->
            <!-- footer -->
            
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
           <div class='scrolltop'>
    <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
</div>


<script>$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})</script>
        
@endsection