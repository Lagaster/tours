@extends('layouts.mainapp')
@section('content')




    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="text-center slider_text">
                                <h3>Aberdare</h3>
                                <p>Country Club</p>
                                {{--  <a href="#" class="boxed-btn3">Explore Now</a>  --}}
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
                                {{--  <a href="#" class="boxed-btn3">Explore Now</a>  --}}
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
                                {{--  <a href="#" class="boxed-btn3">Explore Now</a>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <h3 style="text-align: center">SIX STYLES OF TRAVEL TOURS</h3>

                    <div class="travel-row justify-content-between">


                        <div class=" travel-card">
                            <a href="{{ route('luxury-safari-packages') }}">
                                <img class=" image-travel" src="{{ asset('assets/client/img/amboseli/tent1.jpg') }}"
                                    alt="">
                                <div class="travel-title">
                                    <h5 class="card-title">Luxury Safari </h5>
                                </div>
                            </a>
                        </div>
                        <div class=" travel-card">
                            <a href="{{ route('cultural-historicalpackages') }}">
                                <img class=" image-travel" src="{{ asset('assets/client/img/amboseli/tent1.jpg') }}"
                                    alt="">
                                <div class="travel-title">
                                    <h5 class="card-title">Cultural & Historical</h5>
                                </div>
                            </a>
                        </div>
                        <div class=" travel-card">
                            <a href="{{ route('adventurepackages') }}">
                                <img class=" image-travel" src="{{ asset('assets/client/img/amboseli/tent1.jpg') }}"
                                    alt="">
                                <div class="travel-title">
                                    <h5 class="card-title">Adventure</h5>
                                </div>
                            </a>
                        </div>
                        <div class=" travel-card">
                            <a href="{{ route('familypackages') }}">
                                <img class=" image-travel" src="{{ asset('assets/client/img/amboseli/tent1.jpg') }}"
                                    alt="">
                                <div class="travel-title">
                                    <h5 class="card-title">Family</h5>
                                </div>
                            </a>
                        </div>
                        <div class=" travel-card">
                            <a href="{{ route('daypackages') }}">
                                <img class=" image-travel" src="{{ asset('assets/client/img/amboseli/tent1.jpg') }}"
                                    alt="">
                                <div class="travel-title">
                                    <h5 class="card-title">Day</h5>
                                </div>
                            </a>
                        </div>
                        <div class=" travel-card">
                            <img class=" image-travel" src="{{ asset('assets/client/img/amboseli/tent1.jpg') }}" alt="">
                            <div class="travel-title">
                                <h5 class="card-title">Mice</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center section_title mb_70">
                        <h3>Popular Destination</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">

                            <a href="{{ route('maraFlightAdventure') }}">
                                <img  height="220px" width="100%"
                                src="{{ asset('assets\client\img\mara\conservancyimg3.jpg') }}"
                                alt="FLY-IN MARA ADVENTURE"></a>


                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <a href="{{ route('maraFlightAdventure') }}">
                                    <p>FLY-IN MARA ADVENTURE </p>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <a href="{{ route('experienceWonderMtKenya') }}" >
                            <img height="220px" width="100%" src="{{ asset('/assets/client/img/amboseli/tent1.jpg') }}"
                            alt="Experience The Wonder In Mt Kenta"></a>
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <a href="{{ route('experienceWonderMtKenya') }}" >
                                    <p>EXPERIENCE THE WONDER IN MT KENYA</p>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <a href="{{ route('lakeNakuruAmboseli') }}">
                                <img  height="220px"  width="100%"
                                    src="{{ asset('assets/client/img/mara/e61f436045a42060f1e984224e57c604.png') }}"
                                    alt="Lake Nakuru Amboseli Tour">
                            </a>
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <a href="{{ route('lakeNakuruAmboseli') }}" class="btn btn-sm ">
                                    <p class="text text-capitalize">LAKE NAKURU AND AMBOSELI</p>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img height="220px" width="100%"
                            src="{{ asset('assets\client\img\pictorials\manyatta.png') }}"
                            alt="Historical Tour In Kenya">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <a
                                href="{{ route('historicalTourKenta') }}"> <p class="text text-capitalize">HISTORICAL TOUR OF  KENYA</p></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <a href="{{ route('mountKenyaTreck') }}">
                                <img height="220px" width="100%"
                                    src="{{ asset('assets\client\img\pictorials\MtKenyaytrack.png') }}"
                                    alt="Mt. Kenya Treck">
                            </a>
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <a href="{{ route('mountKenyaTreck') }}"
                                class="btn btn-sm "><p class="text text-capitalize">MOUNT KENYA TREK</p></a>
                                 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <a href="{{ route('fourDaysTsavoWestSarovaTsavoEst') }}">
                                <img  height="220px"  width="100%"
                                    src="{{ asset('assets\client\img\amboseli\148309239_full.jpg') }}"
                                    alt="4 DAYS TSAVO WEST–SAROVA TAITA–TSAVO EAST">
                            </a>

                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">
                                <a href="{{ route('fourDaysTsavoWestSarovaTsavoEst') }}" class="btn btn-sm ">
                                    <p>4 DAYS TSAVO WEST – SAROVA <br>TAITA – TSAVO EAST</p>
                                </a>
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
                        <p>The most known places where our tourist love to spend their time.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img height="220px" width="100%" src="{{ asset('assets\client\img\aberdares\1.jpeg') }}"
                                alt="The Ark Kenya">

                        </div>
                        <div class="place_info">
                            <a href="{{ route('theark') }}">
                                <h3>The Ark Kenya </h3>
                            </a>
                            <p>Aberdares National Park</p>
                            <div class="rating_days d-flex justify-content-end ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <a href="{{ route('fourDaysTsavoWestSarovaTsavoEst') }}">
                            <img height="220px" width="100%" src="{{ asset('assets/client/img/aberdares/AberdareNationalParkMaguraWaterfall.jpg') }}"
                                alt="Aberdare National Park Magura Waterfall">
                            </a>

                        </div>
                        <div class="place_info">
                            <a href="{{ route('fourDaysTsavoWestSarovaTsavoEst') }}">
                                <h3>luscious Mzima springs </h3>
                            </a>
                            <p>Tsavo West</p>
                            <div class="rating_days d-flex justify-content-end ">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <a href="{{ route('mountKenyaTreck') }}">
                            <img height="220px" width="100%" src="{{ asset('assets\client\img\pictorials\mtKenya.png') }}" alt="">
                            </a>
                        </div>
                        <div class="place_info">
                            <a href="{{ route('mountKenyaTreck') }}">
                                <h3 class="text text-capitalize">Mt Kenya</h3>
                            </a>
                            <p>Mt Kenya Trek</p>
                            <div class="rating_days d-flex justify-content-end ">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <a href="{{ route('historicalTourKenta') }}">
                            <img height="220px" width="100%" src="{{ asset('assets/client/img/amboseli/banner-home.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="place_info">
                            <a href="{{ route('historicalTourKenta') }}">
                                <h3>Saiwa Swamp Camp </h3>
                            </a>
                            <p>Saiwa Swamp National Park</p>
                            <div class="rating_days d-flex justify-content-end ">


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <a href="{{ route('masaiMaraSamburuFly') }}">
                            <img height="220px" width="100%" src="{{ asset('assets/client/img/mara/masai-warriors-ceremony-masai-mara-national-park-masai-mara-kenya_main.jpg') }}"
                                alt="masai warriors ceremony masai mara national park masai mara kenya">
                            </a>

                        </div>
                        <div class="place_info">
                            <a href="{{ route('masaiMaraSamburuFly') }}">
                                <h3>Masai Warriors Ceremony </h3>
                            </a>
                            <p>Maasai Mara National park</p>
                            <div class="rating_days d-flex justify-content-end ">


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <a href="{{ route( 'lakeNakuruAmboseli'  ) }}">
                            <img height="220px" width="100%" src="{{ asset('assets/client/img/mara/e61f436045a42060f1e984224e57c604.png') }}" alt="">
                            </a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>   <a href="{{ route(  'lakeNakuruAmboseli' ) }}">Lake Nakuru  <a></h3>
                            </a>
                            <p> Masai</p>
                            <div class="rating_days d-flex justify-content-end ">


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="text-center single_travel">
                        <div class="icon">
                            <a href="{{ route('nairobiNationalPark') }}" >  <img height="220px" width="100%" src="{{ asset('assets\client\img\pictorials\nairobiNationalPark.png') }}" alt=""></a>
                        </div>
                        <h3>  <a href="{{ route('nairobiNationalPark') }}" >Nairobi National Park</a> </h3>
                        <p>
                            <a href="{{ route('nairobiNationalPark') }}" >
                            Nairobi Animal Orphanage
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center single_travel">
                        <div class="icon">
                            <a href="{{ route('historicalTourKenta') }}">
                            <img height="220px" width="100%"
                                src="{{ asset('assets\client\img\pictorials\manyatta.png') }}"
                                alt="">
                            </a>
                        </div>
                        <h3> <a href="{{ route('historicalTourKenta') }}"> Historical Tour Of Kenya</a> </h3>
                        <p>
                            Homeland.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center single_travel">
                        <div class="icon">
                            <a href="route('daystour')" >
                            <img height="220px" width="100%"
                                src="{{ asset('assets\client\img\pictorials\uru, Sweetwaters, Ol Pejeta, Lake Nakuru and Masai Mara Safari.jpg') }}"
                                alt="">
                            </a>
                        </div>
                        <h3>  <a href="{{ route('daystour') }}" > Youth Tour </a> </h3>
                        <p>Youthful Adrenaline Tours.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  <div class="recent_trip_area">
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
                            <img height="220px" width="100%" src="{{ asset('assets\client\img\aberdares\1.jpeg') }}"
                            alt="The Ark Kenya">                        </div>
                        <div class="info">

                            <a href="{{ route('theark') }}">
                                <h3>The Known Ark In Kenya</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img height="220px" width="100%" src="{{ 'assets\client\img\pictorials\nairobiNationalPark.png' }}" alt="">
                        </div>
                        <div class="info">

                            <a href="{{ route('nairobiNationalPark') }}">
                                <h3>The Nairobi National Park</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <a href="{{ route('mountKenyaTreck') }}">
                            <img height="220px" width="100%" src="{{ asset('assets\client\img\pictorials\mtKenya.png') }}" alt="">
                            </a>
                        </div>
                        <div class="info">

                            <a href="{{ route('mountKenyaTreck') }}">
                                <h3>Enjoy Climbing Mt Kenya</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

@endsection
