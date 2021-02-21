@extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>Day</h3>
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
                            <a href="{{ route('daystour') }}">
                                <img height="220px" width="100%"
                                    src="{{ asset('assets\client\img\pictorials\water.png') }}"
                                    alt="Day tours">
                            </a>
                        </div>
                        <div class="blog_details">
                            <a href="{{ route('daystour') }}"
                                    class="btn btn-sm "><p class="text text-capitalize">YOUTHFUL ADRENALINE TOURS</p></a>
                        </div>
                    </article>
                </div>


            </div>
        </div>
    </section>


@endsection
