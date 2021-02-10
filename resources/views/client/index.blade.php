@extends('layouts.mainapp')
@section('content')




    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="text-center slider_text">
                                <h3>Abardare</h3>
                                <p>Country Club</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="text-center slider_text">
                                <h3>Mara</h3>
                                <p>Leisure camp</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="text-center slider_text">
                                <h3>The Ark</h3>
                                <p>Kenya</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="where_togo_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="form_area">
                    <h3>Where you want to go?</h3>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="search_wrap">
                    <form class="search_form" action="#">
                        <div class="input_field">
                            <input type="text" placeholder="Where to go?">
                        </div>
                        <div class="input_field">
                            <input id="datepicker" placeholder="Date">
                        </div>
                        <div class="input_field">
                            <select>
                                <option data-display="Travel type">Travel type</option>
                                <option value="1">Some option</option>
                                <option value="2">Another option</option>
                            </select>
                        </div>
                        <div class="search_btn">
                            <button class="boxed-btn4 " type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center section_title mb_70">
                        <h3>Popular Destination</h3>
                        <p>Walking through thi unspoiled terrain is paradise .Play around a golf watched by a family of
                            warthong</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img height="170" width="200" src="{{ asset('assets/client/img/aberdares/1.jpeg') }}"
                                alt="Aberdares">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Aberdares National Pack
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img height="170" width="200"
                                src="{{ asset('assets/client/img/amboseli/6-Reasons-Why-You-Must-Visit-Amboseli-National-Park.jpg') }}"
                                alt="Amboseli national pack">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Amboseli National Pack
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img height="170" width="200" src="{{ asset('assets/client/img/mara/conservancyimg3.jpg') }}"
                                alt="Maasai Mara">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Maasai Mara
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img height="170" width="200"
                                src="{{ asset('assets/client/img/mara/lake-naivasha-and-maasai-mara-luxury-safari-4-days-tour-2-27894_1574158046.jpeg') }}"
                                alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">lake Naivasha
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img height="170" width="200"
                                src="{{ asset('assets/client/img/mara/Ecotourism-Safari-Masai-Mara.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Tours at Maasai Mara </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img height="170" width="200" src="{{ asset('assets/client/img/aberdares/2.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Aberdares World life
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center section_title mb_70">
                        <h3>Popular Places</h3>
                        <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit
                            hella wolf moon beard words.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('assets/client/img/aberdares/25-the-ark-kenya-1580834691.jpg') }}"
                                alt="The Ark Kenya">

                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>The Ark Kenya </h3>
                            </a>
                            <p>Aberdares National Pack</p>
                            <div class="rating_days d-flex  justify-content-end ">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">3 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('assets/client/img/aberdares/AberdareNationalParkMaguraWaterfall.jpg') }}"
                                alt="Aberdare National Park Magura Waterfall">

                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3> Magura Waterfall</h3>
                            </a>
                            <p>Aberdare National Park</p>
                            <div class="rating_days d-flex  justify-content-end ">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">3 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('assets/client/img/amboseli/getlstd-property-photo.jpg') }}" alt="">

                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3 class="text text-capitalize">ZEBRA PLAINS AMBOSELI CAMP</h3>
                            </a>
                            <p>Amboseli Camp</p>
                            <div class="rating_days d-flex  justify-content-end ">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">3 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('assets/client/img/amboseli/banner-home.jpg') }}" alt="">

                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>Amboseli </h3>
                            </a>
                            <p>Best Amboseli national Pack</p>
                            <div class="rating_days d-flex  justify-content-end ">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">3 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('assets/client/img/mara/masai-warriors-ceremony-masai-mara-national-park-masai-mara-kenya_main.jpg') }}"
                                alt="masai warriors ceremony masai mara national park masai mara kenya">

                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>masai warriors ceremony </h3>
                            </a>
                            <p>Maasai Mara National Pack</p>
                            <div class="rating_days d-flex  justify-content-end ">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">3 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('assets/client/img/mara/e61f436045a42060f1e984224e57c604.png') }}" alt="">

                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>Masai Mara Tours</h3>
                            </a>
                            <p>3 Days Masai</p>
                            <div class="rating_days d-flex  justify-content-end ">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">3 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center video_wrap">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=f59dDEk57i0">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="text-center single_travel">
                        <div class="icon">
                            <img width="260" height="200" src="{{ asset('assets/client/img/mara/3.jpg') }}" alt="">
                        </div>
                        <h3>Maasai Mara</h3>
                        <p>Explore the Maasai Mara National Reserve on a 3-day camping safari that’s a cost-effective way to
                            experience the Great Rift Valley’s landscape</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center single_travel">
                        <div class="icon">
                            <img width="260" height="200"
                                src="{{ asset('assets/client/img/mara/Description-of-Masai-Mara-National-ReserveA.jpg') }}"
                                alt="">
                        </div>
                        <h3>Masai Mara National Pack</h3>
                        <p>
                            As dusk roll in,enjoy romantic evening while you watch the sunset over the plains.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center single_travel">
                        <div class="icon">
                            <img width="260" height="200"
                                src="{{ asset('assets/client/img/mara/6-Days-Masai-Mara-Lake-Nakuru-Amboseli-Safaris-1.jpg') }}"
                                alt="">
                        </div>
                        <h3>Travel Guide</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="text-center single_testmonial">
                                        <div class="author_thumb">
                                            <img height="50" width="100"
                                                src="/assets/client/img/aberdares/baby_leopard_climbing.jpg" alt="">
                                        </div>
                                        <p>As its name signifies, the lodge has been designed in the shape of Noah’s ark. It
                                            has enchanting views of the park’s wildlife as they come to close-by watering
                                            holes and a salt lick.</p>
                                        <div class="testmonial_author">
                                            <h3>- Micky Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="text-center single_testmonial">
                                        <div class="author_thumb">
                                            <img height="50" width="100"
                                                src="/assets/client/img/aberdares/25-the-ark-kenya-1580834691.jpg" alt="">
                                        </div>
                                        <p>Along your route you may see buffalo, antelope, baboon, monkey and elephant
                                            emerging from the dense forest. The park is home to over 2,000 elephants and
                                            some very rare species such the bongo – a giant antelope that lives in the
                                            bamboo forest. Also found here is the very rare African golden cat</p>
                                        <div class="testmonial_author">
                                            <h3>- Tom Johnstone</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="text-center single_testmonial">
                                        <div class="author_thumb">
                                            <img height="50" width="100"
                                                src="/assets/client/img/amboseli/getlstd-property-photo.jpg" alt="">
                                        </div>
                                        <p>Amboseli is known for its large elephant herds and views of immense Mount
                                            Kilimanjaro, across the border in Tanzania. Observation Hill offers panoramas of
                                            the peak and the park’s plains and swamps..</p>
                                        <div class="testmonial_author">
                                            <h3>- Jerry Hanne</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center section_title mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{ asset('assets/client/img/amboseli/tent1.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>March 9, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Amboseli Jumbo tents</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{ 'assets/client/img/aberdares/3.jpg' }}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2020</span>
                            </div>
                            <a href="#">
                                <h3>The Aberdare National Park in the central highlands</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{ asset('assets/client/img/aberdares/4.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Jan 2, 2021</span>
                            </div>
                            <a href="#">
                                <h3>Enjoy watching waterfall at Aberdares Country club</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
