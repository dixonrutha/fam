@extends('layouts.app')


@section('content')

<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- contact -->
	<div class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">contact
				<span class="font-weight-bold">us</span>
			</h3>
			<div class="row contact-grids agile-1 py-sm-5 pb-sm-0 pb-5">
				<div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-map-marker-alt rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
						<p>P.O.BOX 2617 Mwanza,
							<label>Tanzania</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-phone rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Call Us</h4>
						<p>+255743373993
							<!--<label>+255743373993</label>-->
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-envelope-open rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
						<p>
							<a href="mailto:info@example.com">info@fam.co.tz</a>
							<!--<label>-->
							<!--	<a href="mailto:info@example.com">info@fam.co.tz</a>-->
							<!--</label>-->
						</p>
					</div>
				</div>
			</div>
			<!-- form -->
			<form action="#" >
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">First Name</label>
							<input type="text" class="form-control" name="First Name" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Last Name</label>
							<input type="text" class="form-control" name="Last Name" placeholder="" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Subject</label>
							<input type="text" class="form-control" name="Subject" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">E-mail</label>
							<input type="email" class="form-control" name="Email" placeholder="" required="">
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Message</label>
						<textarea name="Message" class="form-control" placeholder="" required=""> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" value="Submit">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->

	
            
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