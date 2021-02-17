@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>Fly In Mara</h3>
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
                                    Ashnil Mara Camp is luxurious with 40 luxury tents which is
                                    in the Masai Mara National Reserve and close to the Mara River
                                    famous for the wildebeest migration.
                                </div>
                                <div class="tab-pane fade" id="tab2primary">
                                    @include("client.packages.itinenarys.masai-mara-flight")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li> A professional driver/ guide</li>
                                                <li>Transportation
                                                <li> Pick up and drop off the airport</li>
                                                <li>Park fees</li>
                                                <li>All activities</li>
                                                - All meals</li>
                                                <li>Drinking water</li>


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


                                        @livewire('book-package', ["tour" =>"Fly In Mara"])
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
