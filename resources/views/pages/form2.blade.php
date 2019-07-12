@extends('layouts.app')
<link href="{{asset('css/loan2.css')}}" rel="stylesheet" />
@section('content')
    <!--background-->
    <h1>Fomu Ya Maombi Ya Mkopo</h1>
    <div class="bg-agile">
        <div class="book-appointment">
            <h2>Taarifa Za Muombaji</h2>
            <div class="book-form agileits-login">
                <form action="#" method="post">
                    <div class="agileits_reservation_grid">
                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="Name" placeholder="Jina Kamili La Mwombaji " required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="Name" placeholder="Jina Kamili La Mwenzi " required="">
                            </div>
                        </div>
                        <div class="span1_of_1 phone_email1">
                            <div class="book_date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input id="datepicker" name="Text" type="text" value="" placeholder="Tarehe Ya Kuzaliwa " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                            </div>
                        </div>
                        <div class="span1_of_1 phone_email">
                            <div class="book_date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input id="datepicker1" name="Text" type="text" value="" placeholder="Tarehe Ya Kuomba Mkopo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                            </div>
                        </div>

                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Namba Ya Simu" required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Barua Pepe" required="">
                            </div>
                        </div>
                        <div class="span1_of_1">
                            <!-- start_section_room -->
                            <div class="section_room">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="">Jinsia :</option>
                                    <option value="">Male</option>
                                    <option value="">Female </option>

                                </select>
                            </div>
                        </div>
                        <div class="span1_of_1 phone_email1">
                            <!-- start_section_room -->
                            <div class="section_room">
                                <i class="fa fa-h-square" aria-hidden="true"></i>
                                <select id="country1" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="">Ndoa  </option>
                                    <option value="">Kaoa au Kuolewa </option>
                                    <option value="">Hajaoa au Hajaolwa </option>
                                    <option value="">Ameachika </option>
                                    <option value="">Mjane </option>

                                </select>
                            </div>
                        </div>


                        <div class="span1_of_1">
                            <!-- start_section_room -->
                            <div class="section_room">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="">Umiliki Wa Makazi</option>
                                    <option value="">Kwako</option>
                                    <option value="">Umejenga </option>

                                </select>
                            </div>
                        </div>

                        <!-- start_section_room -->
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Maelezo Mengine" required="">
                            </div>

                        </div>
                        <div class="clear"></div>
                        <div class="phone_email " style="margin-right: 19px;">
                            <div class="form-text">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <input type="text" name="Name" placeholder="Mahali Unapoioshi" required="">
                            </div>
                        </div>
                        <div class="span1_of_1 phone_email">
                            <div class="book_date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input id="datepicker1" name="Text" type="text" value="" placeholder="Unaishi Apo Tangu Lini" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </form>
            </div>

        </div>

        <!--        another form -->
        <div class="book-appointment">
            <h2>2:Kiasi Cha Mkopo Kinachoombwa </h2>
            <div class="book-form agileits-login">
                <form action="#" method="post">
                    <div class="agileits_reservation_grid">
                        <div class="phone_email" style="margin-right: 19px;">
                            <div class="form-text">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <input type="text" name="Name" placeholder="Kiasi Cha Mkopo:TSH " required="">
                            </div>
                        </div>
                        <div class="span1_of_1 phone_email">
                            <div class="book_date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input id="datepicker1" name="Text" type="text" value="" placeholder="Tarehe Ya Kulipa  Mkopo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                            </div>
                        </div>



                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Nikiasi gani cha rejesho unaweza lipa bila matatizo" required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Dhamana La Mkopo" required="">
                            </div>
                        </div>




                        <div class="clear"></div>
                        <div class="phone_email " style="margin-right: 19px;">
                            <div class="form-text">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <input type="text" name="Name" placeholder="Chanzo Cha Mapato" required="">
                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </form>
            </div>

        </div>
        <!--        another form -->
        <div class="book-appointment">
            <h2>3:Taarifa za Mdhamini </h2>
            <div class="book-form agileits-login">
                <form action="#" method="post">
                    <div class="agileits_reservation_grid">


                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Jina La mdhamini" required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Mahali Anapoishi" required="">
                            </div>
                        </div>
                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Namba ya Simu ya mdhamini" required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Kazi Anazofanya" required="">
                            </div>
                        </div>





                        <div class="clear"></div>

                        <div class="clear"></div>
                </form>
            </div>

        </div>
        <!--        another form -->
        <div class="book-appointment">
            <h2>3:Uongozi </h2>
            <div class="book-form agileits-login">
                <form action="#" method="post">
                    <div class="agileits_reservation_grid">


                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Jina La Mwenyekiti" required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Jina La Katibu" required="">
                            </div>
                        </div>
                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Jina La Mhasibu" required="">
                            </div>
                        </div>






                        <div class="clear"></div>

                        <div class="clear"></div>
                </form>
            </div>

        </div>
        <!--        another form -->
        <div class="book-appointment">
            <h2>4:Marejesho Ya Mkopo </h2>
            <div class="book-form agileits-login">
                <form action="#" method="post">
                    <div class="agileits_reservation_grid">


                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Kiasi Cha Mkopo" required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Muda wa Kulipa Mkopo" required="">
                            </div>
                        </div>
                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Jina La Mrejeshaji" required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Jina la Aliyepokea Mkopo" required="">
                            </div>
                        </div>







                        <div class="clear"></div>

                        <div class="clear"></div>
                </form>
            </div>

        </div>
    </div>


    <!--copyright-->
    <div class="copy w3ls">
        <p>&copy; Fomu ya Mkopo . All Rights Reserved | Design by <a href="http://mitzgroup.com/" target="_blank">Mitz  group </a> </p>
    </div>
    <!--//copyright-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Calendar -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });
    </script>
    <!-- //Calendar -->

    <!-- testimonial-plugin -->
    <script src="{{asset('js/mislider.js')}}"></script>
    <script>
        jQuery(function($) {
            var slider = $('.mis-stage').miSlider({
                //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                stageHeight: 320,
                //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                slidesOnStage: false,
                //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                slidePosition: 'center',
                //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                slideStart: 'mid',
                //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                slideScaling: 150,
                //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                offsetV: -5,
                //  Center slide contents vertically - Boolean. Default: false
                centerV: true,
                //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                navButtonsOpacity: 1,
            });
        });
    </script>
    <!-- //testimonial-plugin -->
    <!-- numscroller-js-file -->
    <script src="{{asset('js/numscroller-1.0.js')}}"></script>
    <!-- //numscroller-js-file -->
    <!-- smooth scrolling -->
    <script src="{{asset('js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth scrolling -->
    <!-- move-top -->
    <script src="{{asset('js/move-top.js')}}"></script>
    <!-- easing -->
    <script src="{{asset('js/easing.js')}}"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="{{asset('js/Gold Stone.js')}}"></script>

@endsection