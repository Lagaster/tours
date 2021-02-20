@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>Youthful Adrenaline Tours</h3>
            <p></p>
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
                                <div class="tab-pane fade in active" id="home">
                                    <ul class="list-group">
                                        <li class="list-group-item ">Kayaking, water gliding, plunging, lunch and entrance
                                            fee @Rapids Camp Sagana (5,500ksh)</li>
                                        <li class="list-group-item ">Ziplining, paintballing, entrance fee, lunch and
                                            drinking water @Kereita forest (4,500)</li>

                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    {{-- @include("client.packages.itinenarys.mountKenyaTreck") --}}
                                </div>
                                <div class="tab-pane fade" id="contact">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                {{-- <li>Porters</li>
                                                <li> Professional local guides</li>
                                                <li> Drinking water</li>
                                                <li> Tents where necessary</li>
                                                <li> Transportation</li> --}}

                                            </ol>

                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                {{-- <li>Alcoholic and soft drinks</li>
                                                <li>Masai village -$30</li>
                                                <li>Balloon ride -$450</li>
                                                <li>Tips</li>
                                                <li>Personal items</li> --}}
                                            </ol>
                                        </div>

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="fouth">
                                    <div>


                                        @livewire('book-package', ["tour" =>"Days Tour"])
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
