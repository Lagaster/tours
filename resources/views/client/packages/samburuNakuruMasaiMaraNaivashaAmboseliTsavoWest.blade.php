@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>12 days Samburu-Lake Nakuru-Masai Mara-Lake Naivasha-Amboseli-Tsavo West</h3>
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
                                    @include("client.packages.itinenarys.samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Transport in a safari van with hatch roof</li>
                                                <li>Pick up from and to the airport</li>
                                                <li>Accommodation as per itinerary</li>
                                                <li>All meals (B L D) Vegetarian Meals will be provided</li>
                                                <li>Services of our professional guide / Driver</li>
                                                <li> All Park entrance fees</li>
                                                <li> All game drives</li>
                                                <li> Statutory taxes</li>
                                                <li>1 liter of water per person per day</li>
                                                <li> Masai Village</li>


                                            </ol>

                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Personal insurance</li>
                                                <li>Items of personal nature</li>
                                                <li>Alcoholic and soft drinks like soda</li>
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
                                        @livewire('book-package',["tour" =>"12 days Luxury Lodge Samburu-Lake Nakuru-Masai
                                        Mara-Lake Naivasha-Amboseli-Tsavo West"])
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
