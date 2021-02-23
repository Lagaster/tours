@extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area slider_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>The Ark</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="mb-1 col-md-4">

                    <img height="220px" width="100%" src="{{ asset('assets/img/pictorialls/ark/elephants.jpg') }}" alt="">
                </div>
                <div class="mb-1 col-md-4">
                    <img height="220px" width="100%" src="{{ asset('assets/img/pictorialls/ark/room1.jpg') }}" alt="">
                </div>
                <div class="mb-1 col-md-4">
                    <img height="220px" width="100%" alt="" src="{{ asset('assets/img/pictorialls/ark/room2.jpg') }}">
                </div>
                <div class="mb-1 col-md-4">
                    <img height="220px" width="100%" src="{{ asset('assets/img/pictorialls/ark/room3.jpg') }}" alt="">

                </div>
                <div class="mb-1 col-md-4">
                    <img height="220px" width="100%" src="{{ asset('assets/img/pictorialls/ark/room4.jpg') }}" alt=""><br>

                </div>
                <div class="mb-1 col-md-4">
                    <img height="220px" width="100%" src="{{ asset('assets/img/pictorialls/ark/room5.jpg') }}" alt="">

                </div>
                <div class="mb-1 col-md-4">
                    <img width="100%" src="{{ asset('assets/img/pictorialls/ark/elephant.jpg') }}" alt="">

                </div>
            </div>
        </div>
    </section>


@endsection
