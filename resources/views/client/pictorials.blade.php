@extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>Pictorials</h3>
                        {{-- <p>Pixel perfect design with awesome contents</p> --}}
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

                            <a href="{{ route('theark') }}">
                            <img class="card-img rounded-0" src="{{ asset('assets/img/blog/theark.jpg') }}" alt="">
                            </a>

                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="{{ route('theark') }}">
                                <h2>The Ark</h2>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">

                            <a href="{{ route('aberdareclub') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/img/blog/aberdarecountryclub.jpg') }}" alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="{{ route('aberdareclub') }}">
                                <h2>The Aberdare Country Club</h2>
                            </a>

                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('maracamp') }}">
                            <img class="card-img rounded-0" src="{{ asset('assets/img/blog/maaraleisurecamp.jpg') }}"
                                alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="{{ route('maracamp') }}">
                                <h2>Mara Leisure Camp</h2>
                            </a>

                        </div>
                    </article>
                </div>



            </div>
        </div>
    </section>


@endsection
