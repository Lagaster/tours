@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>3 Days Samburu national reserve</h3>
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
                                    @include("client.packages.itinenarys.samburuNationalReserve")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Transport in a 4* 4 land cruiser </li>
                                                <li>Park entrance fee </li>
                                                <li>Accommodation as per the itinerary </li>
                                                <li>All meals</li>
                                                <li>2 liters of water per person per day </li>
                                                <li>All taxes </li>

                                            </ol>

                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Alcoholic and soft drinks </li>
                                                <li>Maasai village $30 per person</li>
                                                <li>Balloon ride $450 </li>
                                                <li>Tips </li>
                                            </ol>
                                        </div>

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="tab4primary">
                                    <img class="img-fluid" src="{{ asset('assets/client/img/map.jpg') }}" alt="Tour Map">
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
                                    <div>
                                        @livewire('book-package',["tour" =>"3 Days Luxury Lodge Safari Samburu National
                                        Reserve"])
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
