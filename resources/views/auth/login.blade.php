@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
