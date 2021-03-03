@extends('layouts.mainapp')
@section('content')

    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center bradcam_text">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog_area section-form-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="text-align: center">Tavara Tours And Travel</h3>
                    <br>
                    <h4 style="text-align: center">
                        CONNECT
                        <hr>
                        <br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="https://www.facebook.com/diana.nyonga.12">
                                    <div class="fa fa-facebook"> </div> <span>Facebook</span>
                                </a>

                            </div>
                            <div class="col-md-6">

                                <a href="https://api.whatsapp.com/send?phone=+254742607434">
                                    <div class="fa fa-whatsapp"> </div> <span> <abbr title="0742607434">Whatsapp :
                                            0742607434 </abbr> </span>
                                </a>
                            </div>
                        </div>
                        <br><hr>
                        <div class="row">
                            <div class="col-md-6">

                                <a href="mailto:info@tavaratoursandtravel.com">
                                    <div class="fa fa-envelope"> </div> <span>Email : info@tavaratoursandtravel.com</span>
                                </a>

                            </div>

                            <div class="col-md-6">

                                <a href="">
                                <div class="fa fa-twitter"> </div> <span>Twitter:<br> @and_tavara </span>
                                </a>
                            </div>
                        </div>
                    </h4>
                </div>
                <div class="col-md-6">
                    <div>
                        @if (session('success'))
                            <div class="bg-success h3" > {{session('success')}}</div>
                        @endif
                    </div>
                    <form class="form-contact" action="{{ route('contactUs') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 ">
                                <label for="first">First Name</label>
                                <input id="first" class="form-control" type="text" value="{{ old('first') }}"
                                    name="first">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="second">Second Name</label>
                                <input id="second" class="form-control" type="text" value="{{ old('second') }}"
                                    name="second">
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input id="phone" class="form-control" value="{{ old('phone') }}" type="number"
                                    name="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" value="{{ old('email') }}" type="email"
                                    name="email">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="description">Additional Informaton</label>
                            <textarea id="description" class="form-control" name="description"
                                rows="3">{{ old('description') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection
