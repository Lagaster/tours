@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>Fly-In Mara</h3>
            <p>ADVENTURE</p>
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
                                <div class="tab-pane fade in active show" id="home">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="" style="text-align: justify">
                                                Ashnil Mara Camp is luxurious with 40 luxury tents which is
                                                in the Masai Mara National Reserve and close to the Mara River
                                                famous for the wildebeest migration.
                                            </p>
                                            <h3>
                                                Tour Route
                                            </h3>
                                            <p>
                                                NAIROBI-MASAI MARA-NAIROBI
                                            </p>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile">
                                    @include("client.packages.itinenarys.masai-mara-flight")
                                </div>
                                <div class="tab-pane fade " id="contact">
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
                                <div class="tab-pane fade" id="fouth">
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
