@extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>Cultural-Historical</h3>
                        <p>Packages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    .<div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>
                    For a very long-time cultural tours have been transacted to tourists by being combined by other tours or
                    shunned from. Lately we have seen that tourists who experience the local cultures of a destination get a
                    more authentic experience and enjoy their tour more. Cultural tours in Kenya reflects the purest form of
                    traditional cultures of the 42 tribes of Kenya.
                </p>
                <p>
                    Although cultural visits are not all about visiting authentic remote villages, gastronomic tours (food)
                    and historical visits at the destination are also part of what makes the culture of a destination. That
                    is why as Tavara tours and travel we strive to show you all these aspects of culture in any destination
                    you desire to visit. We try and create a cultural tour that meets your needs but also shows you an
                    interesting blend of culture that is reflected in the architecture, food, art, clothing, history, and
                    people.

                </p>

            </div>
            <div class="col-md-6">
                <p>
                    You are welcomed into a traditional village or home to observe familial structure, meal preparation and
                    ancient practices. In these tours you can see why buildings in a destination were built the way they
                    were, what is the history behind those walls. These visits will make you understand the mystery and
                    lifestyles of the people and tribes of Kenya.
                </p>
                <p>
                    Intriguing tribes to visit in Kenya include Masai, Samburu, Turkana, Rendille, Pokot and El Molo, the
                    smallest tribe in Kenya located at the shores of Turkana. The above tribe visits are more common because
                    they have kept their traditions are still intact till date. We are flexible in these tours as the number
                    of days to participate in them depends on which tribe, season, occasion, and distance from the starting
                    point.

                </p>
            </div>
        </div>

    </div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">




                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('historicalTourKenta') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\pictorials\manyatta.png') }}"
                                    alt="Historical Tour In Kenya">
                            </a>
                        </div>
                        <div class="blog_details">
                           <a
                                    href="{{ route('historicalTourKenta') }}" class="btn btn-sm "> <p class="text text-capitalize">HISTORICAL TOUR OF  KENYA</a></p>
                        </div>
                    </article>
                </div>



                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('mountKenyaTreck') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\pictorials\MtKenyaytrack.png') }}"
                                    alt="Mt. Kenya Treck">
                            </a>
                        </div>
                        <div class="blog_details">
                            <a href="{{ route('mountKenyaTreck') }}"
                                    class="btn btn-sm "><p class="text text-capitalize">MOUNT KENYA TREK</p></a>
                        </div>
                    </article>
                </div>



            </div>
        </div>
    </section>


@endsection
