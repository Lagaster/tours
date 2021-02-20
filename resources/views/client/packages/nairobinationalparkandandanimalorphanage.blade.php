@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3> Nairobi National Park And Animal Orphanage </h3>
            <p>Family Friendly</p>
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
                                <div class="tab-pane fade in show active" id="home">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Family tours carry memories that last a lifetime, because not only does the
                                                family get
                                                to enjoy a fantastic tour but they also get to create memories with each
                                                other. Spending
                                                time with family strengthens the bond between them. Nairobi national park is
                                                one of the
                                                very few parks located inside a city making it a unique park.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                Inside the park are large
                                                and diverse wildlife population. Species found in the park include African
                                                buffaloes,
                                                eastern black rhinoceros, African leopard, lion and many more. The Nairobi
                                                animal
                                                orphanage is in the Nairobi national park. It serves as treatments and
                                                rehabilitation.</p>
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="profile">
                                    @include("client.packages.itinenarys.nairobinationalparkandandanimalorphanage")
                                </div>
                                <div class="tab-pane fade" id="contact">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Transportation</li>
                                                <li>A qualified photographer</li>
                                                <li>A professional tour guide/ driver</li>
                                                <li>4*4 land cruiser</li>
                                                <li>Park entrance fees</li>
                                                <li>Orphanage entrance fees</li>
                                                <li>Drinking water</li>
                                            </ol>

                                        </div>

                                        {{-- <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Alcoholic and soft drinks</li>
                                                <li>Masai village -$30</li>
                                                <li>Balloon ride -$450</li>
                                                <li>Tips</li>
                                                <li>Personal items</li>
                                            </ol>
                                        </div> --}}

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="fouth">
                                    <div>


                                        @livewire('book-package', ["tour" =>"NAIROBI NATIONAL PARK AND ANIMAL ORPHANAGE
                                        FAMILY FRIENDLY"])
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
