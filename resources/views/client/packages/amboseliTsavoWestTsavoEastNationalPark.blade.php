@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>5 Days Amboseli-Tsavo West and Tsavo East National Park</h3>
            <p>Luxury lodge Safari Package</p>
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
                                    @include("client.packages.itinenarys.amboseliTsavoWestTsavoEastNationalPark")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Transport in 4 * 4 land cruiser with hatch roof</li>
                                                <li>Pickup from and to the airport</li>
                                                <li>Accommodation as per itinerary</li>
                                                <li>All meals (B L D)</li>
                                                <li>Services of our professional Guide / Drive</li>
                                                <li>All Pack Entrance fees</li>
                                                <li>All game drives</li>
                                                <li>Statutory taxes</li>
                                            </ol>
                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Personal insurance</li>
                                                <li>Items of personal nature</li>
                                                <li>Alcoholic & soft drinks like sodas</li>
                                                <li>Balloon Safari</li>
                                                <li>Masai Village</li>
                                                <li>Visa</li>
                                                <li>Tips</li>
                                            </ol>
                                        </div>

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="tab4primary">
                                    <img class="img-fluid" src="{{ asset('assets/client/img/map.jpg') }}" alt="Tour Map">
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
                                    <div>
                                        @livewire('book-package',["tour" =>"5 Days Luxury Lodge Safari Amboseli Tsavo West
                                        And Tsavo East National Parks"])
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
