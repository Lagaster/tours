@extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>Luxury-Safari</h3>
                        <p>Packages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">




                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('maraFlightAdventure') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\mara\conservancyimg3.jpg') }}"
                                    alt="FLY-IN MARA ADVENTURE">
                            </a>


                        </div>
                        <div class="blog_details">
                            <a href="{{ route('maraFlightAdventure') }}" class="btn btn-sm ">
                                <p>FLY-IN MARA ADVENTURE </p>
                            </a>
                        </div>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('masaiMaraSamburuFly') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\mara\Description-of-Masai-Mara-National-ReserveA.jpg') }}"
                                    alt="Masai mara Samburu">
                            </a>
                        </div>
                        <div class="blog_details">
                            <a href="{{ route('masaiMaraSamburuFly') }}" class="btn btn-sm ">
                                <p>MASAI MARA AND SAMBURU FLY-IN</p>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('experienceWonderMtKenya') }}">
                                <img class="card-img rounded-0" src="{{ asset('/assets/client/img/amboseli/tent1.jpg') }}"
                                    alt="Experience The Wonder In Mt Kenta">
                            </a>
                        </div>
                        <div class="blog_details">
                            <a href="{{ route('experienceWonderMtKenya') }}" class="btn btn-sm ">
                                <p>EXPERIENCE THE WONDER IN MT KENYA</p>
                            </a>
                        </div>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('fourDaysTsavoWestSarovaTsavoEst') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\amboseli\148309239_full.jpg') }}"
                                    alt="4 DAYS TSAVO WEST–SAROVA TAITA–TSAVO EAST">
                            </a>
                        </div>
                        <div class="blog_details">
                            <a href="{{ route('fourDaysTsavoWestSarovaTsavoEst') }}" class="btn btn-sm ">
                                <p>4 DAYS TSAVO WEST – SAROVA <br>TAITA – TSAVO EAST</p>
                            </a>
                        </div>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('lakeNakuruAmboseli') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/mara/e61f436045a42060f1e984224e57c604.png') }}"
                                    alt="Lake Nakuru Amboseli Tour">
                            </a>
                        </div>
                        <div class="blog_details">
                            <a href="{{ route('lakeNakuruAmboseli') }}" class="btn btn-sm ">
                                <p class="text text-capitalize">LAKE NAKURU AND AMBOSELI
                            </a></p>
                        </div>
                    </article>
                </div>





            </div>
        </div>
    </section>


@endsection
