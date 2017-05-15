@extends('layouts.master')

@section('page-level-scripts')
    @parent
    <!-- CSS -->
    <style>
        #hero_2 {
            background: url("{{asset('img2/cover.jpg')}}")
        }
    </style>
@endsection

@section('page')
    <section id="hero_2">
        <div class="intro_title animated fadeInDown">
            <h1>Place your order</h1>
            <div class="bs-wizard">

                <div class="col-xs-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">Your cart</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="{{route('cart')}}" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">Your details</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="{{route('cart.checkout')}}" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">Finish!</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                </div>

            </div>  <!-- End bs-wizard -->
        </div>   <!-- End intro-title -->
    </section><!-- End Section hero_2 -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('cart')}}">My cart</a></li>
                <li>Finish</li>
            </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 add_bottom_15">

                <div class="form_title">
                    <h3><strong><i class="icon-ok"></i></strong>Thank you!</h3>
                    <p>
                    </p>
                </div>
                <div class="step">
                    <p>
                        Thank you for using our services. Our tourguides will contact you soon!
                    </p>
                </div><!--End step -->

                <div class="form_title">
                    <h3><strong><i class="icon-tag-1"></i></strong>Booking summary</h3>
                    <p>
                    </p>
                </div>
                <div class="step">
                    @foreach($orders as $order)
                    <table class="table confirm">
                        <thead>
                        <tr>
                            <th colspan="2">
                                {{$order->tour->name}}
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <strong>Number of people</strong>
                            </td>
                            <td>
                                {{$order->number_of_people}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tourguide</strong>
                            </td>
                            <td>
                                {{$order->tour->tourguide->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Total cost</strong>
                            </td>
                            <td>
                                ${{$order->number_of_people * $order->tour->price}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    @endforeach
                </div><!--End step -->
            </div><!--End col-md-8 -->

            <aside class="col-md-4">
                <div class="box_style_1">
                    <h3 class="inner">Thank you!</h3>
                    <p>
                        In case you need an invoice, we provide it for you.
                    </p>
                    <hr>
                    <a class="btn_full_outline" href="invoice.html" target="_blank">View your invoice</a>
                </div>
                @include('partials.need_help')
            </aside>

        </div><!--End row -->
    </div><!--End container -->
@endsection