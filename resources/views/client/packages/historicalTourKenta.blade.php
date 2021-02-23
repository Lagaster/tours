@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>Historical Tour Of Kenya</h3>
            <p></p>
        </div>
    </div>
    <div class="destination_details_info">
        <div class="container">


            <div class="row">
                <div class="col-md-12">

                    <div class="panel with-nav-tabs panel-primary">
                        @include('client.packages.header')
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in show active" id="home" style="text-align: justify">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Saiwa Swamp national park is a forested paradise filled exotic flowers,
                                                trees, and
                                                birds. It is also a habitat of the rare and endangered semi-aquatic
                                                Sitatunga antelope
                                                and as a preserve for the rare De Brazza’s monkey. The sheer abundance of
                                                birdlife at
                                                Kakamega forest is overwhelming, it is a quiet haven for nature lovers.
                                            </p>
                                            <br>
                                            <h3>Tour Route</h3>
                                            <p>
                                                Nairobi – Cherengani Hill – Saiwa Swamp – Kakamega Forest – Kisumu – Kisii –
                                                Hell’s Gate - Nairobi
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p> The local guides will tell you the history and importance of the forest as
                                                they know
                                                more since its their homeland. Hell’s gate National Park has an incredibly
                                                beautiful
                                                scenery where zebras, buffalos, antelopes, baboons, and other wildlife roam
                                                an
                                                idyllic
                                                landscape of forests, gorges, and grassy volcanoes near the shores of Lake
                                                Naivasha.</p>
                                        </div>
                                    </div>



                                </div>
                                <div class="tab-pane fade" id="profile">
                                    @include("client.packages.itinenarys.historicalTourKenta")
                                </div>
                                <div class="tab-pane fade" id="contact">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Transportation</li>
                                                <li>Park entrance fees</li>
                                                <li>Accommodation</li>
                                                <li>Professional driver/ guide</li>
                                            </ol>

                                        </div>

                                        {{-- <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Alcoholic and soft drinks</li>
                                                <li>Masai village -$30</li>
                                                <li>Balloon ride -$450</li>
                                                <li>Tips</li>
                                                <li>Personal items</li>
                                            </ol>
                                        </div> --}}

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="fouth">
                                    <div>


                                        @livewire('book-package', ["tour" =>"Lake Nakuru Amboseli"])
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



@endsection
