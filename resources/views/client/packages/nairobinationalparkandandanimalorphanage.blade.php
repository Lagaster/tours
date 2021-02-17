@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>NAIROBI NATIONAL PARK AND ANIMAL ORPHANAGE FAMILY FRIENDLY</h3>
            <p>FAMILY TOURS</p>
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
                                <div class="tab-pane fade in active" id="tab1primary">
                                    Family tours carry memories that last a lifetime, because not only does the family get
                                    to enjoy a fantastic tour but they also get to create memories with each other. Spending
                                    time with family strengthens the bond between them. Nairobi national park is one of the
                                    very few parks located inside a city making it a unique park. Inside the park are large
                                    and diverse wildlife population. Species found in the park include African buffaloes,
                                    eastern black rhinoceros, African leopard, lion and many more. The Nairobi animal
                                    orphanage is in the Nairobi national park. It serves as treatments and rehabilitation.
                                </div>
                                <div class="tab-pane fade" id="tab2primary">
                                    @include("client.packages.itinenarys.nairobinationalparkandandanimalorphanage")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
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
                                <div class="tab-pane fade" id="tab4primary">
                                    <img class="img-fluid" src="{{ asset('assets/client/img/map.jpg') }}" alt="Tour Map">
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
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
