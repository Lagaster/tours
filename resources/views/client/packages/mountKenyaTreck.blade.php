@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>MOUNT KENYA TREK</h3>
            <p>Journey To Mount Kenya Luxury Safari Package</p>
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
                                    The Mount Kenya trek is a challenging and enjoyable journey to Mount Kenya’s highest
                                    trekking peak (Point Lenana) at 4985 meters. From the summit there is a beautiful view
                                    of the dramatic volcanic massif and the two main peaks of Batian and Nelion, as well as
                                    long views over the central plains of Kenya. It has been a popular and incredibly
                                    attractive hike through an ancient landscape dotted with glaciers, rock spires, high
                                    tarns and some beautiful unique flora and fauna like the giant groundsels and the
                                    odd-looking rock hyrax which has evolved from the elephant.
                                </div>
                                <div class="tab-pane fade" id="tab2primary">
                                    @include("client.packages.itinenarys.mountKenyaTreck")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Porters</li>
                                                <li> Professional local guides</li>
                                                <li> Drinking water</li>
                                                <li> Tents where necessary</li>
                                                <li> Transportation</li>

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
