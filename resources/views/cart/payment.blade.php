@extends('layouts.master')

@section('page-level-scripts')
    @parent
    <!-- CSS -->
    <link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">
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

                <div class="col-xs-4 bs-wizard-step active">
                    <div class="text-center bs-wizard-stepnum">Your details</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="{{route('cart.payment')}}" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">Finish!</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="confirmation.html" class="bs-wizard-dot"></a>
                </div>

            </div>  <!-- End bs-wizard -->
        </div>   <!-- End intro-title -->
    </section><!-- End Section hero_2 -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('cart')}}">My cart</a></li>
                <li>Check out</li>
            </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
        <div class="row">
            {{Form::open(['method' => 'post', 'route' => 'cart.checkout'])}}
            <div class="col-md-8 add_bottom_15">
                <div class="form_title">
                    <h3><strong>1</strong>Your Details</h3>
                    <p>

                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group @if($errors->has('full_name')) has-error @endif">
                                {{Form::label('full_name', 'Full name *')}}
                                {{Form::text('full_name', Auth::check() ? Auth::user()->name : null, ['class' => 'form-control', 'required' => true])}}
                                <span class="help-block">{{$errors->first('full_name')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group @if($errors->has('phone')) has-error @endif">
                                {{Form::label('phone', 'Telephone *')}}
                                {{Form::tel('phone', null, ['class' => 'form-control', 'required' => true])}}
                                <span class="help-block">{{$errors->first('phone')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group @if($errors->has('email')) has-error @endif">
                                {{Form::label('email', 'Email')}}
                                {{Form::email('email', Auth::check() ? Auth::user()->email : null, ['class' => 'form-control'])}}
                                <span class="help-block">{{$errors->first('email')}}</span>
                            </div>
                        </div>
                    </div>
                </div><!--End step -->

                <div class="form_title">
                    <h3><strong>2</strong>Payment Information</h3>
                    <p>
                    </p>
                </div>
                <div class="step">
                    <div class="form-group @if($errors->has('name_on_card')) has-error @endif">
                        {{Form::label('name_on_card', 'Name on card *')}}
                        {{Form::text('name_on_card', Auth::check() ? mb_strtoupper(Auth::user()->name) : null, ['class' => 'form-control', 'required' => true])}}
                        <span class="help-block">{{$errors->first('name_on_card')}}</span>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group @if($errors->has('card_number')) has-error @endif">
                                {{Form::label('card_number', 'Card number *')}}
                                {{Form::text('card_number', null, ['class' => 'form-control', 'required' => true])}}
                                <span class="help-block">{{$errors->first('card_number')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="{{asset('img/cards.png')}}" width="207" height="43" alt="Cards" class="cards">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Expiration date *</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @if($errors->has('expiration_date_month')) has-error @endif">
                                        {{Form::select('expiration_date_month', $months, null, ['class' => 'form-control', 'required' => true])}}
                                        <span class="help-block">{{$errors->first('expiration_date_month')}}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @if($errors->has('expiration_date_year')) has-error @endif">
                                        {{Form::number('expiration_date_year', null, ['class' => 'form-control', 'required' => true, 'min' => 0, 'placeholder' => 'Year'])}}
                                        <span class="help-block">{{$errors->first('expiration_date_year')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('ccv', 'Security code *')}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group @if($errors->has('ccv')) has-error @endif">
                                            {{Form::text('ccv', null, ['class' => 'form-control', 'placeholder' => 'CCV', 'required' => true, 'pattern' => '[0-9]{3}'])}}
                                            <span class="help-block">{{$errors->first('ccv')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <img src="{{asset('img/icon_ccv.gif')}}" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End row -->

                    <hr>

                    <h4>Or checkout with Paypal</h4>
                    <p>
                    </p>
                    <p>
                        <img src="{{asset('img/paypal_bt.png')}}" alt="Image">
                    </p>
                </div><!--End step -->

                <div class="form_title">
                    <h3><strong>3</strong>Billing Address</h3>
                    <p>
                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group @if($errors->has('address')) has-error @endif">
                                {{Form::label('address', 'Address *')}}
                                {{Form::text('address', Auth::check() ? Auth::user()->address : null, ['class' => 'form-control'])}}
                                <span class="help-block">{{$errors->first('address')}}</span>
                            </div>
                        </div>
                    </div>
                </div><!--End step -->

                <div id="policy">
                    <h4>Cancellation policy</h4>
                    <div class="form-group @if($errors->has('policy_terms')) has-error @endif">
                        <label><input type="checkbox" name="policy_terms" id="policy_terms" checked>I accept terms and conditions and general policy.</label>
                        <span class="help-block">{{$errors->first('policy_terms')}}</span>
                    </div>
                    <button type="submit" class="btn_1 green medium">Book now</button>
                </div>
            </div>

            <aside class="col-md-4">
                <div class="box_style_1">
                    <h3 class="inner">- Summary -</h3>
                    <table class="table table_summary">
                        <tbody>
                        <tr>
                            <td>
                                Number of people
                            </td>
                            <td class="text-right">
                                {{$sum_persons}}
                            </td>
                        </tr>
                        <tr class="total">
                            <td>
                                Total cost
                            </td>
                            <td class="text-right">
                                ${{Cart::total()}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn_full" type="submit">Book now</button>
                    <a class="btn_full_outline" href="{{route('tour.lists')}}"><i class="icon-right"></i> Continue shopping</a>
                </div>
                @include('partials.need_help')
            </aside>
            {{Form::close()}}
        </div><!--End row -->
    </div><!--End container -->
@endsection

@section('page-level-scripts')
    @parent
    <!-- Specific scripts -->
    {{Html::script('js/icheck.js')}}
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>
@endsection