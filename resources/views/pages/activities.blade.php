@extends('layouts.app')


@section('content')

	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{url('/')}}">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Fam Activities</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- faqs -->
	<div class="faq-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">FAM Activities
				<span class="font-weight-bold"></span>
			</h3>
			<div class="faq-info pt-md-4">
			
				<div class="faq-w3agile">
					<ul class="faq pl-sm-4 pl-3">
						<li class="item1 mt-sm-4 mt-3 pl-2">
							<!--<a href="#" title="click here">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ?</a>-->
							<ul>
							    	<h3 class="w3-head text-dark">Economical</h3>
								<li class="subitem1 mt-3">
									<p> Kikundi cha FAM kimejipanga kufanya shughuli mbali mbali za kiuchumi kwa ustawi wa wanachama wake. Ili kufanikisha ilo kikundi kimeanza kwa kuwajenga uwezo wanachama wake kiuchumi kupitia fedha za mzunguko. Ambapo malengo ya pamojakwenye mzunguko wa kwanza ni uwekezaji. Imeshauriwa kuwa fedha za mzunguko atakazokuwa anapata mwanachama zitumike kufanya shughuli za kijamii ili kumuwezesha mwanachama kukuza kipato.</p>
								</li>
							</ul>
						</li>
						<li class="item2 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">
Aidha kikundi kimejipanga kufungua vitegauhumi mbali mbali ili kukuza kipato.
</a>
							<ul>
								<li class="subitem1 mt-3">
									<p> Kikundi cha FAM kimeundwa na wahandisi wa fani mbali mbali. Hivyo kupitia kitengo cha Projects wanachama hufanya tafiti mbali mbali kujua matatizo yaliyopo kwenye jamii na kukuyatafuta suluhisho kwa kutumia teknolojia ambapo tatizi hizo zitaziingizia kikundi kipato.</p>
								</li>
							</ul>
						</li>
									<h3 class="w3-head text-dark">Social</h3>
						<li class="item3 mt-sm-4 mt-3 pl-2">
							<!--<a href="#" title="click here">Consectetuer adipiscing elit Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices?</a>-->
							<ul>
								<li class="subitem1 mt-3">
									<p>FAM ni kikundi cha kijamii, hivyo wanakikundi kwa pamoja wamekubaliana kushirikiana kwa pamoja kwenye shughuli mbali mbali za kijamii zikiwemo starehe na maafa. 
Kikundi kinawajibika kushiriki katika starehe ya wanachama mfano harusi, kumbukumbu ya kuzaliwa na kumzawadia, kumfariji anapougua, pamoja na kumpa pole anapofiwa na mtoto, mme/mke, baba/mama pamoja na kutoa rambi rambi kwa familia pale mwanachama anapofariki.
</p>
<p>  Aidha kikundi kitashiriki shughuli nyingine za jamii za nje y kikundi mfano matendo ya huruma - kuwatembelea wagonjwa pamoja na watoto yatima kuwafariji.  </p>
								</li>
							</ul>
						</li>
						<h3 class="w3-head text-dark">Educational</h3>
						<li class="item5 mt-sm-4 mt-3 pl-2">
							<!--<a href="#" title="click here">Euismod tincidunt laoreet Etiam faucibus viverra libero vel efficitur ?</a>-->
							<ul>
								<li class="subitem1 mt-3">
									<p>Dhumuni la kikundi cha FAM ni kubadilisha maisha ya wanachama wake kutoka hatua moja kweda nyigingine. Pamoja na kutengeneza utaratibu wa kuwapatia wanachama wake mitaji. Kikundi kinao wajibu wa kuelimisha wanachama wake juu ya elimu ya ujasiliamali ili kuhakikisha wanafanikiwa kwenye shughuli zao za kibiashara.
Kikundi kinaendesha semina mbali mbali kwa wanachama wake kama ifuatavyo
.</p><li class="subitem1 mt-3"> 
Jinsi ya kuandika mpango wa biashara hatua kwa hatua
   </li>
   <li class="subitem1 mt-3"> 
anzishaji wa Biashara bunifu za kipee zinazolipa haraka zaidi
   </li>
   <li class="subitem1 mt-3"> 
Jinsi ya kuongeza mzunguko wa fedha na elimu ya fedha kwa ujumla wake 
   </li>
   
								</li>
							</ul>
						</li>
					
					
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //faqs -->

            
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