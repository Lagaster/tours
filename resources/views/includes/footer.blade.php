
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a style="margin-right: 20%" href="{{ route('index') }}">
                                <img height="75px" width="70%"  src="{{ asset('assets/img/logo/logo1.png') }}" alt="">
                            </a>
                        </div>

                        <p><b>Tavara Tours And Travel</b>
                            <br>
                            Simco Plaza 5th Floor Suite
                            <br>
                            <a href="https://api.whatsapp.com/send?phone=+254742607434"><i class="fa fa-whatsapp"></i> +254 742 607 434</a> <br>
                            <a href="mailto:info@tavaratoursandtravel.co.ke">info@tavaratoursandtravel.co.ke</a><br>
                            <a href="https://www.facebook.com/diana.nyonga.12"> <i class="fa fa-facebook">acebook</i> </a>                        </p>
                        {{-- <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Company
                        </h3>
                        <ul class="links">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('pictorials') }}">Pictorials</a></li>
                            <li><a href="{{ route('contact_us') }}"> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Popular destination
                        </h3>
                        <ul class="links double_links">
                            <li><a href="{{ route('nairobiNationalPark') }}">Nairobi</a></li>
                            <li><a href="{{ route('masaiMaraSamburuFly') }}">Masai Mara</a></li>
                            <li><a href="{{ route('theark') }}">The Ark</a></li>
                            {{--  <li><a href="#">Aberdare</a></li>
                            <li><a href="#">Mara Comp</a></li>  --}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Gallery
                        </h3>
                        <div class="instagram_feed">
                            <div class="single_insta">
                                <a href="{{ route('pictorials') }}">
                                    <img  src="{{ asset('assets/img/blog/maaraleisurecamp.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="single_insta">
                                <a href="{{ route('pictorials') }}">
                                    <img src="{{ asset('assets/img/blog/theark.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single_insta">
                                <a href="{{ route('pictorials') }}">
                                    <img src="{{ asset('assets/img/blog/aberdarecountryclub.jpg') }}" alt="">
                                </a>
                            </div>
                            {{--  <div class="single_insta">
                                <a href="#">
                                    <img  src="{{ asset('assets/img/blog/maaraleisurecamp.jpg') }}" alt="">
                                </a>
                            </div>  --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="text-center copy_right">

                        Copyright &copy;<script data-cfasync="false">
                        </script>
                        <script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved |Tavara Tours And Travel </a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

