@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>07 Days Amboseli-Ol Pejeta-Lake Nakuru-Masai Mara</h3>
            <p> Luxury lodge Safari Package</p>
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
                                <div class="tab-pane fade in active" id="tab1primary">Primary 1</div>
                                <div class="tab-pane fade" id="tab2primary">
                                    @include("client.packages.itinenarys.samburuNationalReserve")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>All Pack entrance fees</li>
                                                <li>Accommodation as per itinerary</li>
                                                <li>All meals</li>
                                                <li>Transport in a 4 * 4 land cruiser with hatch roof on top</li>
                                                <li>2 liters of water per person per day</li>
                                                <li>All game drives</li>
                                                <li>All government taxes</li>
                                                <li>Services of an English speaking guide</li>
                                                <li>Pickup and drop off back to the airport</li>


                                            </ol>

                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Alcoholic and soft drinks</li>
                                                <li>Personal items</li>
                                                <li>Balloon ride at Masai Mara $450 Per person</li>
                                                <li>Masai Village $ 30 per person</li>
                                                <li>Tips</li>
                                                <li>Visas</li>
                                            </ol>
                                        </div>

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="tab4primary">
                                    <img class="img-fluid" src="{{ asset('assets/client/img/map.jpg') }}" alt="Tour Map">
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
                                    <div>
                                        @livewire("includes.book",["tour" =>"7 Days Luxury Lodge Amboseli, OlPejeta,Lake
                                        Nakuru And Masai Mara"])
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
