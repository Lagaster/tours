@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>3 Days Masai Mara</h3>
            <p>Flight and Luxury Safari Package</p>
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
                                    @include("client.packages.itinenarys.masai-mara-flight")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Parking entrance fees</li>
                                                <li>4X4 land cruiser for your game drives</li>
                                                <li>All meals at the lodge</li>
                                                <li>2 litres of water per day per person</li>
                                                <li> All transfers from the airport and hotel and back</li>

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

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="tab4primary">
                                    <img class="img-fluid" src="{{ asset('assets/client/img/map.jpg') }}" alt="Tour Map">
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
                                    <div>


                                        @livewire('book-package', ["tour" =>"7 Days Luxury Lodge Safari Masai Mara ,Lake
                                        Nakuru, Naivasha and Amboseli"])
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
