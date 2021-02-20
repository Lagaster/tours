@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>03 Days Amboseli National Park</h3>
            <p> Luxury lodge Safari Package</p>
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
                                <div class="tab-pane fade in active" id="tab1primary">Primary 1</div>
                                <div class="tab-pane fade" id="tab2primary">
                                    @include("client.packages.itinenarys.luxuryLodgeAmboseliNationalPark")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Ground transport in a safari land cruiser with pop up roof for game
                                                    viewing, photography and
                                                    touring</li>
                                                <li>Full board accommodation whilst on safari</li>
                                                <li>Meal plan as described, B=Breakfast, L=Lunch and D=Dinner</li>
                                                <li>Accommodation in double/twin/triple room sharing</li>
                                                <li> All park entrance fees to include government taxes</li>
                                                <li>Service of an English speaking professional driver/guide </li>
                                                <li>Game drives as detailed in the itinerary</li>
                                                <li>Start and end in Nairobi </li>
                                                <li>Service of an English speaking professional driver/guide</li>
                                                <li>Game drives as detailed in the itinerary</li>
                                                <li>Start and end in Nairobi</li>
                                            </ol>
                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Tips</li>
                                                <li>Laundry</li>
                                                <li>Drinks</li>
                                                <li>International flights</li>
                                                <li>Visas</li>
                                                <li>Items of a personal nature</li>
                                                <li>Optional activities and any other extras not detailed in the above
                                                    itinerary</li>
                                            </ol>
                                        </div>

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="tab4primary">
                                    <img class="img-fluid" src="{{ asset('assets/client/img/map.jpg') }}" alt="Tour Map">
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
                                    <div>
                                        @livewire('book-package',["tour" =>"03 Days luxury Lodge Amboseli National Park"])
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
