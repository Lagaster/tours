@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>4 DAYS TSAVO WEST – SAROVA TAITA – TSAVO EAST</h3>
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
                                <div class="tab-pane fade in active" id="tab1primary">
                                    Tsavo West’s broken volcanic hills sprouting the luscious Mzima springs are both
                                    serenading and enthralling, for this scenic beauty is a natural bathtub of hippos and
                                    crocodiles, as well as fish.
                                    The Rhino sanctuary houses giant roaring rhinos while the Sarova Taita safari and the
                                    exciting Lion Hill camp lends a panoramic beauty to this adventurous safari trip. If the
                                    thrill lacks magnitude yet, Tsavo East’s crowded herds of
                                    world-famous elephants and its man-eating lions will give you scary stories to tell your
                                    friends on your return.

                                </div>
                                <div class="tab-pane fade" id="tab2primary">
                                    @include('client.packages.itinenarys.fourDaysTsavoWestSarovaTaitaTsavoWest')
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Full board accommodation</li>
                                                <li>All meals</li>
                                                <li>Park entrance fees</li>
                                                <li>Professional drive/ guide</li>
                                                <li>Exclusive transport in a 4*4 tour minibus</li>


                                            </ol>
                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Alcoholic and soft drinks</li>
                                                <li>Masai village - $30 per person</li>
                                                <li>Balloon ride - $450</li>
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
                                        @livewire('book-package',["tour" =>"4 DAYS TSAVO WEST – SAROVA TAITA – TSAVO EAST"])
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
