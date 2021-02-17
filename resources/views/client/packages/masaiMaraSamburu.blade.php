@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>Masai Mara Samburu Fly</h3>
            <p>LUXURY SAFARI TOURS</p>
        </div>
    </div>
    <div class="destination_details_info">
        <div class="container">


            <div class="row">
                <div class="col-md-12">

                    <div class="panel with-nav-tabs panel-primary">
                        <div class="panel-heading row">
                            <ul class="nav nav-tabs col-12">
                                <li class="px-4 py-3 text-center active text "><a href="#tab1primary"
                                        data-toggle="tab">Highlights</a>
                                </li>
                                <li class="px-4 py-3 text-center text "><a href="#tab2primary"
                                        data-toggle="tab">Itinenary</a></li>
                                <li class="px-4 py-3 text-center text "><a href="#tab3primary"
                                        data-toggle="tab">Includes/Exludes
                                    </a></li>
                                <li class="px-4 py-3 text-center text "><a href="#tab4primary" data-toggle="tab">Map
                                    </a></li>

                                <li class="px-4 py-3 text-center text "><a href="#tab5primary" data-toggle="tab">Book Now
                                    </a></li>


                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1primary">
                                    Appreciate the picturesque beauty of the majestic, snowcapped Mt Kenya and the
                                    riverbank oasis of Samburu. The snow of Mt Kenya is a peculiar phenomenon, unexpected
                                    so close to the earth equator, yet vitally important to the local ecosystem, which
                                    includes
                                    the Samburu Wildlife Reserve.
                                </div>
                                <div class="tab-pane fade" id="tab2primary">
                                    @include("client.packages.itinenarys.masaiMaraSamburu")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
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
                                <div class="tab-pane fade" id="tab4primary">
                                    <img class="img-fluid" src="{{ asset('assets/client/img/map.jpg') }}" alt="Tour Map">
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
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
