@extends('layouts.mainapp')
@section('content')

    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                        {{-- <p>Pixel perfect design with awesome contents</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>About Us</h3>
                    <p>
                        At Tavara Tours and Travel, we believe in finding better ways every day to make our client‘s
                        experiences unique.
                        We passionately craft and share transformative customized tours to unique destinations in Kenya. We
                        believe that no two trips are the same that is why we aspire to create once-in-a-lifetime trips
                        designed to inspire and intoxicate.Our custom adventures stretch across a spectrum of interests,
                        environments, and activities.

                    </p>
                    <div>
                         <img height="100%" width="100%" src="{{ asset('assets/img/blog/theark.jpg') }}" alt="">
                    </div>

                </div>

                <div class="col-md-6">
                    <h3></h3>
                    <div>
                        <img height="100%" width="100%" src="{{ asset('assets/img/blog/aberdarecountryclub.jpg') }}"
                    </div>
                    <p>
                        Every trip is expertly planned by a vibrant team playing the role of a well-connected friend,
                        showing our clients the beauty of our motherland, Kenya. We want to be that reliable, responsive,
                        and supportive friend who helps you plan every detail as you enjoy your trip. We want to support you
                        in every facet of your journey in Kenya.
                        I invite you to join us in exploring Kenya in style with Tavara Tours and travel. Make this the year
                        you enjoy an experience of a lifetime

                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
