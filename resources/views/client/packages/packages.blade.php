@extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>Packages</h3>
                        {{-- <p>Pixel perfect design with awesome contents</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">

                {{-- 1 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">

                            <a href="{{ route('maraflight') }}"> <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/img-1.jpg') }}" alt="">
                            </a>

                        </div>
                        <div class="blog_details">

                            <p>3 Days Masai Mara Flight and Luxury Safari Package...<a href="{{ route('maraflight') }}"
                                    class="btn btn-sm ">Read more</a>
                            </p>
                        </div>
                    </article>
                </div>
                {{-- 2 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">

                            <a href="{{ route('three-days-luxury-lodge-safari-Amboseli') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/Amboseli-National-Park.jpg') }}" alt="">
                            </a>


                        </div>
                        <div class="blog_details">

                            <p>3 Days Luxury Lodge Safari Amboseli National Park...
                                <a href="{{ route('three-days-luxury-lodge-safari-Amboseli') }}" class="btn btn-sm ">Read
                                    more</a>
                            </p>
                        </div>
                    </article>
                </div>
                {{-- 3 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('Samburu-National-Park') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/Samburu_National.jpg') }}" alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p> 3 Days Luxury Lodge Safari Samburu National Reserve...<a
                                    href="{{ route('Samburu-National-Park') }}" class="btn btn-sm ">Read more</a></p>
                        </div>
                    </article>
                </div>
                {{-- 4 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('safari-Lake-Nakuru-and-Masai-Mara') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/4-Days-Lake-Nakuru-Masai-Mara.jpg') }}"
                                    alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p> 4 Days Luxury Lodge Safari Lake Nakuru And Masai Mara...<a
                                    href="{{ route('safari-Lake-Nakuru-and-Masai-Mara') }}" class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>
                {{-- 5 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('AmboseliTsavoWestAndEast') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/4Days1.jpg') }}" alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p>5 Days Luxury Lodge Safari Amboseli/ Tsavo West And Tsavo East...<a
                                    href="{{ route('AmboseliTsavoWestAndEast') }}" class="btn btn-sm ">Read more</a></p>
                        </div>
                    </article>
                </div>
                {{-- 6 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('aberdareLakeNakuruMasaiMara') }}">
                                <img class="card-img rounded-0" src="{{ asset('assets/img/blog/maaraleisurecamp.jpg') }}"
                                    alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p>5 Days Aberdare/ Lake Nakuru/ Masai Mara Luxury Lodge Safari...<a
                                    href="{{ route('aberdareLakeNakuruMasaiMara') }}" class="btn btn-sm ">Read more</a>
                            </p>
                        </div>
                    </article>
                </div>
                {{-- 7 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('masaiMaraLakeNakuruNaivashaAmboseli') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/14 Days Kenya Safari - Lake Nakuru, Masai Mara, Lake Naivasha, Amboseli, Tsavo West and Tsavo East.jpg') }}"
                                    alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p>7 Days Luxury Lodge Safari Masai Mara/ Lake Nakuru/ Naivasha/ Amboseli...<a
                                    href="{{ route('masaiMaraLakeNakuruNaivashaAmboseli') }}" class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>
                {{-- 8 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('sevenDaysAmboseliOlPejetaNakuruMasaiMara') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/7 Days Samburu, Sweetwaters, Ol Pejeta, Lake Nakuru and Masai Mara Safari.jpg') }}"
                                    alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p>7 Days Luxury Lodge Safari Amboseli/ Ol Pejeta/ Lake Nakuru Masai Mara...<a
                                    href="{{ route('sevenDaysAmboseliOlPejetaNakuruMasaiMara') }}"
                                    class="btn btn-sm ">Read more</a></p>
                        </div>
                    </article>
                </div>
                {{-- 9 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('aberdaresOlpejetaNakuruMasaiMara') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/download.jpg') }}" alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p>8 Days Luxury Lodge Safari Aberdare/ Ol Pejeta/ Lake Nakuru Masai Mara...<a
                                    href="{{ route('aberdaresOlpejetaNakuruMasaiMara') }}" class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>
                {{-- 10 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('bestOfTheNorthernAndSourthenCircuit') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/southern-circuit.jpg') }}" alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p>8 Days Best Of The Northern And Southern Circuit Luxury Lodge Safari...<a
                                    href="{{ route('bestOfTheNorthernAndSourthenCircuit') }}" class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>
                {{-- 11 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest') }}">
                                <img class="card-img rounded-0" src="{{ asset('assets/client/img/pictorials/f8.jpg') }}"
                                    alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p>12 Days Samburu/ Lake Nakuru/ Masai Mara/ Lake Naivasha/ Amboseli/ Tsavo...<a a
                                    href="{{ route('samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest') }}"
                                    class="btn btn-sm ">Read more</a></p>
                        </div>
                    </article>
                </div>
                {{-- 12 --}}
                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('Samburu-National-Park') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/pictorials/download (2).jpg') }}" alt="">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p> 3 Days Luxury Lodge Safari Samburu National Reserve...<a
                                    href="{{ route('Samburu-National-Park') }}" class="btn btn-sm ">Read more</a></p>
                        </div>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('maraFlightAdventure') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\mara\conservancyimg3.jpg') }}"
                                    alt="FLY-IN MARA ADVENTURE">
                            </a>


                        </div>
                        <div class="blog_details">
                            <p>FLY-IN MARA ADVENTURE...<a href="{{ route('maraFlightAdventure') }}"
                                    class="btn btn-sm ">Read more</a></p>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('masaiMaraSamburuFly') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\mara\Description-of-Masai-Mara-National-ReserveA.jpg') }}"
                                    alt="Masai mara Samburu">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p>Masai Mara Samburu fly...<a href="{{ route('masaiMaraSamburuFly') }}"
                                    class="btn btn-sm ">Read more</a></p>
                        </div>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('fourDaysTsavoWestSarovaTsavoEst') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\amboseli\148309239_full.jpg') }}"
                                    alt="4 DAYS TSAVO WEST–SAROVA TAITA–TSAVO EAST">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p>4 DAYS TSAVO WEST–SAROVA TAITA–TSAVO EAST...<a
                                    href="{{ route('fourDaysTsavoWestSarovaTsavoEst') }}" class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('experienceWonderMtKenya') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('/assets/client/img/amboseli/tent1.jpg') }}"
                                    alt="Experience The Wonder In Mt Kenta">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p>Experience The Wonder In Mt Kenta...<a href="{{ route('experienceWonderMtKenya') }}"
                                    class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('lakeNakuruAmboseli') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets/client/img/mara/e61f436045a42060f1e984224e57c604.png') }}"
                                    alt="Lake Nakuru Amboseli Tour">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p class="text text-capitalize">Lake Nakuru Amboseli Tour...<a
                                    href="{{ route('lakeNakuruAmboseli') }}" class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('historicalTourKenta') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\pictorials\manyatta.png') }}"
                                    alt="Historical Tour In Kenya">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p class="text text-capitalize">Historical Tour In Kenya...<a
                                    href="{{ route('historicalTourKenta') }}" class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('mountKenyaTreck') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\pictorials\MtKenyaytrack.png') }}"
                                    alt="Mt. Kenya Treck">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p class="text text-capitalize">Mt. Kenya Treck...<a href="{{ route('mountKenyaTreck') }}"
                                    class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>


                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('nairobiNationalPark') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\pictorials\nairobiNationalPark.png') }}"
                                    alt="Nairobi National Park and Animal Orphanage">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p class="text text-capitalize">Nairobi National Park and Animal Orphanage...<a
                                    href="{{ route('nairobiNationalPark') }}" class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>



                <div class="col-md-4">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="{{ route('daystour') }}">
                                <img class="card-img rounded-0"
                                    src="{{ asset('assets\client\img\pictorials\water.png') }}"
                                    alt="Day tours">
                            </a>
                        </div>
                        <div class="blog_details">
                            <p class="text text-capitalize">Day tours...<a href="{{ route('daystour') }}"
                                    class="btn btn-sm ">Read
                                    more</a></p>
                        </div>
                    </article>
                </div>





            </div>
        </div>
    </section>


@endsection
