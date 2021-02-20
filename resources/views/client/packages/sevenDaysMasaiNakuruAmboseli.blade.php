@extends('layouts.mainapp')

@section('content')

    <div class="destination_banner_wrap overlay">
        <div class="text-center destination_text">
            <h3>07 Days Masai Mara-Lake Nakuru-Naivasha-Amboseli</h3>
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
                                    @include("client.packages.itinenarys.sevenDaysMasaiNakuruAmboseli")
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="row">
                                        <div class="single_destination col-md-6 ">
                                            <h4>Cost inclusive of:</h4>
                                            <ol>
                                                <li>Transport in a4 * 4 land cruiser with hatch roof</li>
                                                <li>Accommodation as per itinerary</li>
                                                <li>All meals (B L D)</li>
                                                <li>Services of our professional driver /Guide</li>
                                                <li>All park Entrance fee</li>
                                                <li>All game drives</li>
                                                <li>Statutory taxes</li>

                                            </ol>

                                        </div>

                                        <div class="single-destination col-md-6 ">
                                            <h4>Cost not inclusive of:</h4>
                                            <ol>
                                                <li>Personal insurance</li>
                                                <li>Items of personal nature</li>
                                                <li>Alcoholic and soft drinks</li>
                                                <li>Tips and porter-age</li>
                                                <li>Balloon ride $450 PP</li>
                                                <li>Masai Village visit $ 20 PP</li>
                                                <li>Hotel Accommodation in Nairobi</li>
                                            </ol>
                                        </div>

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="tab4primary">
                                    <img class="img-fluid" src="{{ asset('assets/client/img/map.jpg') }}" alt="Tour Map">
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
                                    <div>
                                        @livewire('book-package',["tour" =>"7 Days Luxury Lodge Safari Masai Mara ,Lake
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
