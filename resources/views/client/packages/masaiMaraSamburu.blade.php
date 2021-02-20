@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>Masai Mara Samburu </h3>
            <p>Fly-In</p>
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
                                <div class="tab-pane fade in active" id="home">
                                    Appreciate the picturesque beauty of the majestic, snowcapped Mt Kenya and the
                                    riverbank oasis of Samburu. The snow of Mt Kenya is a peculiar phenomenon, unexpected
                                    so close to the earth equator, yet vitally important to the local ecosystem, which
                                    includes
                                    the Samburu Wildlife Reserve.
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    @include("client.packages.itinenarys.masaiMaraSamburu")
                                </div>
                                <div class="tab-pane fade" id="contact">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li> A professional drive/guide</li>
                                                <li>Transportation</li>
                                                <li>Pick up and drop off the airport</li>
                                                <li>Park fees</li>
                                                <li>Drinking water</li>
                                                <li>All meals</li>



                                            </ol>

                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Alcoholic and soft drinks</li>
                                                <li>Masai village -$30</li>
                                                <li>Balloon ride -$450</li>
                                                <li>Tips</li>
                                                <li>Personal items</li>
                                            </ol>
                                        </div>
                                        <div>
                                            RATES (depends on level of Accommodation)*
                                        </div>

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="fouth">
                                    <div>


                                        @livewire('book-package', ["tour" =>"4 Days Masai Mara Samburu Fly"])
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
