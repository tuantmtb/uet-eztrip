@extends('layouts.master')

@section('page-level-scripts')
    @parent
    <!-- CSS -->
    <link href="{{asset('css/jquery.switch.css')}}" rel="stylesheet">
    <style>
        #hero_2 {
            background: url("{{asset('img2/cover.jpg')}}")
        }

        button:disabled, button:disabled:hover, button:disabled:focus {
            background-color: #565a5c;
            cursor: not-allowed;
        }
    </style>
@endsection

@section('page')
    <section id="hero_2">
        <div class="intro_title animated fadeInDown">
            <h1>Place your order</h1>
            <div class="bs-wizard">

                <div class="col-xs-4 bs-wizard-step active">
                    <div class="text-center bs-wizard-stepnum">Your cart</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="{{route('cart')}}" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">Your details</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="{{route('cart.payment')}}" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">Finish!</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="confirmation.html" class="bs-wizard-dot"></a>
                </div>

            </div>  <!-- End bs-wizard -->
        </div>   <!-- End intro-title -->
    </section><!-- End Section hero_2 -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>My cart</li>
            </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped cart-list add_bottom_30">
                    <thead>
                    <tr>
                        <th>
                            Tour
                        </th>
                        <th>
                            Number of people
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Total
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(Cart::content()->isNotEmpty())
                        @foreach(Cart::content() as $index => $cart)
                            <tr>
                                <td>
                                    <div class="thumb_cart">
                                        <img src="{{$cart->options->get('url_gird')}}" alt="{{$cart->name}}">
                                    </div>
                                    <span class="item_cart">
                                        <a href="{{route('tour.show', $cart->id)}}">{{$cart->name}}</a>
                                    </span>
                                </td>
                                <td>
                                    {{$cart->qty}}
                                </td>
                                <td>
                                    ${{$cart->price}}
                                </td>
                                <td>
                                    <strong>${{$cart->qty * $cart->price}}</strong>
                                </td>
                                <td class="options">
                                    <a href="javascript:" onclick="deleteCart('{{$cart->rowId}}')"><i
                                                class=" icon-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">
                                You haven't book any tour! Visit {{Html::link(route('tour.lists'), 'here')}} to find
                                your tour.
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                @if(Cart::content()->isNotEmpty())
                    <table class="table table-striped options_cart">
                        <thead>
                        <tr>
                            <th colspan="3">
                                Add options / Services
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="width:10%">
                                <i class="icon_set_1_icon-16"></i>
                            </td>
                            <td style="width:60%">
                                Dedicated Tour guide <strong>+$34</strong>
                            </td>
                            <td style="width:35%">
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_1" id="option_1" value="34">
                                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-26"></i>
                            </td>
                            <td>
                                Pick up service <strong>+$34*</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_2" id="option_2" value="34">
                                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-71"></i>
                            </td>
                            <td>
                                Insurance <strong>+$24*</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_3" id="option_3" value="24">
                                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-15"></i>
                            </td>
                            <td>
                                Welcome bottle <strong>+$24</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_4" id="option_4" value="24">
                                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-59"></i>
                            </td>
                            <td>
                                Coffee break <strong>+$12*</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_5" id="option_5" value="12">
                                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-58"></i>
                            </td>
                            <td>
                                Dinner <strong>+$26*</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_6" id="option_6" value="26">
                                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon_set_1_icon-40"></i>
                            </td>
                            <td>
                                Bike rent <strong>+$26*</strong>
                            </td>
                            <td>
                                <label class="switch-light switch-ios pull-right">
                                    <input type="checkbox" name="option_7" id="option_7" value="26">
                                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                                    <a></a>
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="add_bottom_15">
                        <small>* Prices for person.</small>
                    </div>
                @endif
            </div><!-- End col-md-8 -->

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
                        <tr style="display: none" id="option_1_sum">
                            <td>
                                Dedicated tour guide
                            </td>
                            <td class="text-right">
                                {{$sum_persons}}x $34
                            </td>
                        </tr>
                        <tr style="display: none;" id="option_2_sum">
                            <td>
                                Pick up service
                            </td>
                            <td class="text-right">
                                {{$sum_persons}}x $34
                            </td>
                        </tr>
                        <tr style="display: none;" id="option_3_sum">
                            <td>
                                Insurance
                            </td>
                            <td class="text-right">
                                {{$sum_persons}}x $24
                            </td>
                        </tr>
                        <tr style="display: none;" id="option_4_sum">
                            <td>
                                Welcome bottle
                            </td>
                            <td class="text-right">
                                {{$sum_persons}}x $24
                            </td>
                        </tr>
                        <tr style="display: none;" id="option_5_sum">
                            <td>
                                Coffee break
                            </td>
                            <td class="text-right">
                                {{$sum_persons}}x $12
                            </td>
                        </tr>
                        <tr style="display: none;" id="option_6_sum">
                            <td>
                                Dinner
                            </td>
                            <td class="text-right">
                                {{$sum_persons}}x $26
                            </td>
                        </tr>
                        <tr style="display: none;" id="option_7_sum">
                            <td>
                                Bike rent
                            </td>
                            <td class="text-right">
                                {{$sum_persons}}x $26
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
                    @if(Cart::content()->isNotEmpty())
                        <a href="{{route('cart.payment')}}" class="btn_full">Check out</a>
                    @else
                        <button class="btn_full" type="button" disabled>Check out</button>
                    @endif
                    <a class="btn_full_outline" href="{{route('tour.lists')}}"><i class="icon-right"></i> Continue shopping</a>
                </div>
                @include('partials.need_help')
            </aside><!-- End aside -->

        </div><!--End row -->
    </div><!--End container -->
@endsection

@section('page-level-scripts')
    @parent
    <script>
        var total_cost = parseFloat('{{Cart::total()}}');
        var sum_persons = parseInt('{{$sum_persons}}');

        $(function() {
            $('body').on('change', '.options_cart input[type="checkbox"]', function() {
                var value = parseFloat($(this).val());
                var name = $(this).attr('name');
                var is_checked = $(this).is(':checked');
                if (is_checked) {
                    $('#' + name + '_sum').show();
                    total_cost += value*sum_persons;
                    $('.total').find('.text-right').text('$' + total_cost);
                } else {
                    $('#' + name + '_sum').hide();
                    total_cost -= value*sum_persons;
                    $('.total').find('.text-right').text('$' + total_cost);
                }
            });
        })
    </script>
@endsection