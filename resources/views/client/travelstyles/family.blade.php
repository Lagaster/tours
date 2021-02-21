@extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>Family</h3>
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
                            <a href="{{ route('nairobiNationalPark') }}">
                                <img height="220px" width="100%"
                                    src="{{ asset('assets\client\img\pictorials\nairobiNationalPark.png') }}"
                                    alt="Nairobi National Park and Animal Orphanage">
                            </a>
                        </div>
                        <div class="blog_details">
                            <a
                                    href="{{ route('nairobiNationalPark') }}" class="btn btn-sm "><p class="text text-capitalize">NAIROBI NATIONAL PARK AND ANIMAL <br> ORPHANAGE FAMILY FRIENDLY</p></a>
                        </div>
                    </article>
                </div>


{{--
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('daystour') }}">
                                <img height="220px" width="100%"
                                    src="{{ asset('assets\client\img\pictorials\water.png') }}"
                                    alt="Day tours">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p class="text text-capitalize">Day tours...<a href="{{ route('daystour') }}"
                                    class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>  --}}





            </div>
        </div>
    </section>


@endsection
