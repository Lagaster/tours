@extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area slider_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>The Ark</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="mb-1 col-md-6 ">
                    {{-- <img style="margin-left: 30%" height="30%" width="40%"
                src="{{ asset('assets/img/banner/arkkk.jpg') }}" alt=""> --}}

                    <img width="100%" height="100%" src="{{ asset('assets/img/pictorialls/ark/elephants.jpg') }}" alt="">
                </div>
                <div class="mb-1 col-md-6 ">
                    <img width="100%" height="100%" src="{{ asset('assets/img/pictorialls/ark/room1.jpg') }}" alt="">
                </div>
                <div class="mb-1 col-md-6 ">
                    <img width="100%" height="100%" alt="" src="{{ asset('assets/img/pictorialls/ark/room2.jpg') }}">
                </div>
                <div class="mb-1 col-md-6 ">
                    <img width="100%" height="100%" src="{{ asset('assets/img/pictorialls/ark/room3.jpg') }}" alt="">

                </div>
                <div class="mb-1 col-md-6 ">
                    <img width="100%" height="100%" src="{{ asset('assets/img/pictorialls/ark/room4.jpg') }}" alt=""><br>

                </div>
                <div class="mb-1 col-md-6 ">
                    <img width="100%" height="100%" src="{{ asset('assets/img/pictorialls/ark/room5.jpg') }}" alt="">

                </div>
                <div class="mb-1 col-md-6 ">
                    <img width="100%" src="{{ asset('assets/img/pictorialls/ark/elephant.jpg') }}" alt="">

                </div>
            </div>
        </div>
    </section>


@endsection

{{-- @extends('layouts.mainapp')
@section('content')



    <div class="bradcam_area slider_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>The Ark</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <img style="margin-left: 30%" height="30%" width="40%"
                        src="{{ asset('assets/img/banner/arkkk.jpg') }}" alt=""><br>

                    <div class="text-center bradcam_text">
                        <h3>The Ark</h3>
                    </div>
                    <p style="text-align: justify">
                        Set in the heart of the Aberdare Park, iconic and yes, quirky. The Ark overlooks a floodlit
                        waterhole and salt lick, which attracts a host of awesome wildlife. Resembled and named after Noah’s
                        Ark, the Ark comprises three decks from which numerous balconies and lounges provide a superb
                        location for wildlife to be seen.
                        The Ark has four viewing areas for observing the ever-present animal activity. There is also a
                        ground level bunker- the perfect hideout for the descending photographer. This is a circular
                        pillbox-like structure, and it is from this vantage point that pictures of animals on the salt lick
                        only yards away may be taken through the view holes in complete safety. As Monty Brown describes in
                        his book, ” Haven Under the Hill ”:
                        “In this intimate recess one can almost, but not quite, pat the animals, hear their sounds and smell
                        the aroma of the night. This is a magical corner, where, very often, the visitor may enjoy in
                        solitary state of beauty of it all.”


                    </p>

                </div>
                <div class="col-md-6">
                    <p style="text-align: justify">
                        So that you don’t miss any animal sighting, the night guard will buzz your room when special animals
                        come to the waterhole. There is even a live webcam so that you can enjoy viewing the animals whether
                        at The Ark or at home. Please log onto The Ark’s website to view the webcam(www.thearkkenya.com).
                        The sister property to The Ark, The Aberdare Country Club is a perfect place to spend an afternoon
                        or to go have lunch and is a short distance away. There is even a golf course for those keen! A
                        shuttle bus will take you to the Country Club from The Ark so that you can relax in the new Health
                        Club and Spa or go horse riding along-side giraffes and other animals that are home to our private
                        sanctuary.
                    </p>
                    <img width="95%" height="45%" src="{{ asset('assets/img/pictorialls/ark/elephants.jpg') }}"
                        alt="">
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h3>Accomodation</h3>
                    <p>
                        The Ark has 60 “cabin-style” rooms. Recently refurbished, the style of each room reflects the idea
                        of being on a ship and each room has the same features. This include an en-suite bathroom, windows
                        with a view facing the forest or waterhole, a buzzer system to announce the arrival of special
                        animals at the salt lick and waterhole.
                        <br>
                        The room options comprise the following:
                    </p>
                    <p>
                    <ul>
                        <li><strong>6 singles</strong> with single beds</li>
                        <li><strong>37 twins</strong> with two single beds</li>
                        <li><strong>8 doubles</strong> with a queen-sized bed</li>
                        <li><strong>9 triple-bed</strong> cabins with three single beds</li>
                    </ul><br>
                    <strong>
                        Please note: The-Triple-bed cabins are the best rooms for families
                    </strong><br>
                    All the rooms are on different ‘decks’ again reflecting those in proper ship, and ‘Deck C’ is available
                    for the physically challenged.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>Lodge Amenities</h3>
                    <p>
                    <ul>
                        <li>Sitting and viewing decks on all four levels</li>
                        <li>Bar</li>
                        <li> Curio gift shop offers local Kenyan curios, safari wear, essentials and toiletries.</li>
                        <li>Set menus, buffets, and theme nights from different countries</li>
                        <li>Beautiful fireplace / lounge area</li>
                        <li>Complementary WI-FI in public areas</li>
                    </ul>
                    </p>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <img width="100%" height="100%" src="{{ asset('assets/img/pictorialls/ark/room1.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-md-6">
                            <img width="100%" alt="" src="{{ asset('assets/img/pictorialls/ark/room2.jpg') }}">
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7">
                    <img width="100%" height="75%" src="{{ asset('assets/img/pictorialls/ark/room3.jpg') }}" alt="">

                </div>
                <div class="col-md-5">
                    <img width="100%" height="40%" src="{{ asset('assets/img/pictorialls/ark/room4.jpg') }}" alt=""><br>
                    <br>
                    <img width="100%" height="31%" src="{{ asset('assets/img/pictorialls/ark/room5.jpg') }}" alt="">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Aberdare National Park Activities</h3>
                    <p style="text-align: justify">
                        Covering altititudes from above 7,000 feet to 14,000 feet above sea level, the Aberdare National
                        Park is located 200 Kilometres / 162 miles from Nairobi. Since the 1950’s, Aberdare National Park
                        has been a major a major attraction and continues to be a favourite destination for tourists of
                        travellers who love the outdoors and wildlife. This is also historically significant for being the
                        birthplace for Kenya’s independence movement.
                    </p><br>
                    <strong>Wildlife</strong>
                    <p style="text-align: justify">
                        Visitors Can observe different animals such as elephants, leopards, buffalos, rhinos in the park. These animals come to the waterhole and can be seen from the comfortable, secure places nearby.
                        Elephants dominate the water holes and salt licks. There are other animals that come to drink water such as hyenas, which have to contend with elephants chasing them off at great speed. Some animals such as leopards are shy, however, they are very often seen during the morning and evening safari drives.
                        While doing safari drives, you may see some of the various monkeys such as the colobus and vervet monkeys, from whom the Aberdare National Park is an ideal habitat. Many birds are also found here. In the forest there are many animals like Red Duiker, Suni, bushbuck, elephant, buffalo and leopard. The moorland thickets are the home of Reed Buck and Black-fronted Duiker and also the Black Rhino.

                    </p><br>
                    <strong>Mammals species-44,Bird species-290</strong>
                    <br>
                    <strong>
                        Safari Drives
                    </strong>
                    <p style="text-align: justify">

                        Half or full day safari drive to The Salient and The Moorlands in Aberdare National Park. Search the plains for a plethora of animal activity and capture that perfect photograph to take home.
                        Game drives to the Solio Ranch, a private sanctuary between the spurs of the Aberdare Mountains and Mt.Kenya are possible too. This 25,000 hectare reserve became famous because of its unique success in the rearing of the White Rhino and Black Rhino. Lion, leopards, cheetahs, buffaloes and zebras can also be viewed here in great numbers.

                    </p>
                    <br>
                    <strong>
                        Fishing
                    </strong>

                    <p style="text-align: justify">
                        Trout fishing in the Aberdare National Park is very popular especially up high on the mist-covered moors. Rivers found here are relatively small as are the fish such as the wild trout, which fight extremely well. The Chania River is especially good for brown trout where a short rod is an advantage as casting is difficult. A ranger is a good idea as we are in a National Park. Coupled with superb views of enormous cascading waterfalls and beautiful scenery these rivers allow the fisherman to enjoy what Kenya really has to offer. The access road is well maintained by park authorities but during the rainy season a four wheel vehicle is necessary.
                        Best months to fish: All year round. Altitude: 10,000 ft Species: Rainbow and Brown Trout. Average size: 6 t0 8 ounces.

                    </p>
                </div>
                <div class="col-md-6">

                    <strong>Hiking to the Waterfalls</strong>
                    <p style="text-align: justify">
                        Hiking or trekking to one of three waterfalls in the area is a great way for adventurous to get some exercise and do something more rigorous. There are three different waterfalls you may visit. Please do book these excursions in advance as a guide will need to be booked and allocated for your trip. The waterfalls are called Chania, Karura and Gikururu.
                    </p>
                    <strong>Bird watching</strong>
                    <p style="text-align: justify">
                        Bird life found in the forest is unique and varied. The most conspicuous group is the sunbird, with four abundant species; Tacazze Sunbird, Golden-winged Sunbird, the Emerald Green Malachite Sunbird and tiny, Double-Collared Sunbird.
                    </p>
                    <strong style="color:yellowgreen"> Suggested activities if you have...</strong><br>
                    <strong>1 day</strong>
                    <p style="text-align: justify">
                    Afternoon safari drive in Aberdare National Park
                    </p>
                    <strong>2 days</strong>
                    <p style="text-align: justify">
                        Full day safari drive in Aberdare National Park + Trekking to the waterfalls
                    </p>
                    <strong>3 days</strong>
                    <p style="text-align: justify">
                        Mountain climbing, play golf/horse ride experience at Aberdare Country Club + Full day safari drive in Aberdare National Park + full day safari drive in Solio Ranch.
                    </p>
                    <strong>4 days</strong>
                    <p style="text-align: justify">
                        Mountain climbing, play golf/horse ride experience at Aberdare Country Club + Full day safari drive in Aberdare National Park + full day safari drive in Solio Ranch + Bush Culinay experience.
                    </p>
                    <br>
                    <img width="100%" src="{{ asset('assets/img/pictorialls/ark/elephant.jpg') }}" alt="">


                </div>
            </div>
        </div>
    </section>


@endsection --}}
