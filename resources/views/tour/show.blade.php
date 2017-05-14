@extends('layouts.master')

@section('title', $tour->name)

@section('page-level-styles')
    @parent
    {{Html::style('css/date_time_picker.css')}}
    <style>
        input[type=number].text-appearance::-webkit-inner-spin-button,
        input[type=number].text-appearance::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
    <link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">
@endsection

@section('page')
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{$tour->url_cover}}"
             data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>{{$tour->name}}</h1>
                        <span>{{$tour->place}}, {{$tour->city}}</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main">
                            from/per person <span><sup>$</sup>{{$tour->price}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{route('tour.lists')}}">Tours</a></li>
                <li>{{$tour->name}}</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">

                <div id="single_tour_feat">
                    <ul>
                        <li><i class="icon_set_1_icon-4"></i>Museum</li>
                        <li><i class="icon_set_1_icon-83"></i>{{$tour->time_duration}} Hours</li>
                        <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                        <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                        <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                        <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                        <li><i class="icon_set_1_icon-29"></i>{{$tour->tourguide ? $tour->tourguide->name : ''}}</li>
                    </ul>
                </div>

                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap"
                                                    aria-expanded="false" aria-controls="collapseMap"
                                                    data-text-swap="Hide map" data-text-original="View on map">View on
                        map</a></p><!-- Map button for tablets/mobiles -->

                <div class="row">
                    <div class="col-md-3">
                        <h3>Description</h3>
                    </div>
                    <div class="col-md-9">
                        <p>
                            {!! $tour->description !!}
                        </p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>Schedule</h3>
                    </div>
                    <div class="col-md-9">
                        <div class=" table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        1st March to 31st October
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Monday
                                    </td>
                                    <td>
                                        10.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tuesday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Wednesday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Thursday
                                    </td>
                                    <td>
                                        <span class="label label-danger">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Friday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Saturday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sunday
                                    </td>
                                    <td>
                                        10.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong><em>Last Admission</em></strong>
                                    </td>
                                    <td>
                                        <strong>17.00</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        1st November to 28th February
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Monday
                                    </td>
                                    <td>
                                        10.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tuesday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Wednesday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Thursday
                                    </td>
                                    <td>
                                        <span class="label label-danger">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Friday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Saturday
                                    </td>
                                    <td>
                                        09.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sunday
                                    </td>
                                    <td>
                                        10.00 - 17.30
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong><em>Last Admission</em></strong>
                                    </td>
                                    <td>
                                        <strong>17.00</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>Reviews </h3>
                        <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a
                            review</a>
                    </div>
                    <div class="col-md-9">
                        <div id="general_rating">11 Reviews
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>Position
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Tourist guide
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Price
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Quality
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row -->
                        <hr>
                        <div class="review_strip_single">
                            {{Html::image('https://triip.imgix.net/new/img/triip-ava-bg/default-avatar-05.png?crop=faces&fit=crop&h=76&w=76', 'Image', ['class' => 'img-circle'])}}
                            <small> - 10 March 2015 -</small>
                            <h4>Mary</h4>
                            <p>
                                She was great! She was very flexible and changes our itinerary to suit our taste. She knows the place around, and knows where to eat good food. She is very accomodating and fun to be around. We highly recommend her for your food trip. Unlike other food trip guide she don't cringe you with less food . Her service is worth every penny you pay for . She would bring you to places where they serve you with great food and big servings.
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single">
                            {{Html::image('https://triip.imgix.net/new/img/triip-ava-bg/default-avatar-13.png?crop=faces&fit=crop&h=76&w=76', 'Image', ['class' => 'img-circle'])}}
                            <small> - 10 March 2015 -</small>
                            <h4>Amanda</h4>
                            <p>
                                Fantastic night with great company!! Luci really took care of us and is such a sweetheart. Thank you Luci xx
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single last">
                            {{Html::image('https://triip.imgix.net/new/img/triip-ava-bg/default-avatar-26.png?crop=faces&fit=crop&h=76&w=76', 'Image', ['class' => 'img-circle'])}}
                            <small> - 10 March 2015 -</small>
                            <h4>Jiyun</h4>
                            <p>
                                Luci was the perfect tour guide. She knew all the local spots and planned out everything in advance so that I could spend my short time in Hanoi in the most optimal way. Furthermore, she was very accommodating, friendly, and punctual. I would definitely book another triip with her next time I'm in Hanoi! Thank you, Luci!
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->
                    </div>
                </div>
            </div><!--End  single_tour_desc-->

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                       aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on
                        map</a>
                </p>
                <div class="box_style_1 expose">
                    <h3 class="inner">- Booking -</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> Select a date</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class=" icon-clock"></i> Time</label>
                                <input class="time-pick form-control" value="12:00 AM" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Adults</label>
                                <div class="numbers-row">
                                    <input type="number" min="0" value="0" id="adults" class="qty2 form-control text-appearance" name="quantity">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Children</label>
                                <div class="numbers-row">
                                    <input type="number" min="0" value="0" id="children" class="qty2 form-control text-appearance"
                                           name="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table class="table table_summary">
                        <tbody>
                        <tr>
                            <td>
                                Adults
                            </td>
                            <td class="text-right" id="sum-adults">
                                0
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Children
                            </td>
                            <td class="text-right" id="sum-children">
                                0
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total amount
                            </td>
                            <td class="text-right" id="total-amount">
                                0x ${{$tour->price}}
                            </td>
                        </tr>
                        <tr class="total">
                            <td>
                                Total cost
                            </td>
                            <td class="text-right" id="total-cost">
                                $0
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn_full" href="javascript:" id="book-now">Book now</a>
                    <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
                </div><!--/box_style_1 -->

                <div class="box_style_4">
                    <i class="icon_set_1_icon-90"></i>
                    <h4><span>Book</span> by phone</h4>
                    <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>

            </aside>
        </div><!--End row -->
    </div><!--End container -->


    <!-- Modal Review -->
    <div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
                </div>
                <div class="modal-body">
                    <div id="message-review">
                    </div>
                    <form method="post" action="assets/review_tour.php" name="review_tour" id="review_tour">
                        <input name="tour_name" id="tour_name" type="hidden" value="Paris Arch de Triomphe Tour">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name_review" id="name_review" type="text" placeholder="Your name"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="lastname_review" id="lastname_review" type="text"
                                           placeholder="Your last name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email_review" id="email_review" type="email" placeholder="Your email"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Position</label>
                                    <select class="form-control" name="position_review" id="position_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tourist guide</label>
                                    <select class="form-control" name="guide_review" id="guide_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <select class="form-control" name="price_review" id="price_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quality</label>
                                    <select class="form-control" name="quality_review" id="quality_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="form-group">
                        <textarea name="review_text" id="review_text" class="form-control" style="height:100px"
                                  placeholder="Write your review"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="verify_review" class=" form-control"
                                   placeholder="Are you human? 3 + 1 =">
                        </div>
                        <input type="submit" value="Submit" class="btn_1" id="submit-review">
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End modal review -->
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

    <!-- Date and time pickers -->
    {{Html::script('js/bootstrap-datepicker.js')}}
    {{Html::script('js/bootstrap-timepicker.js')}}
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>

    <!--Review modal validation -->
{{--    {{Html::script('assets/validate.js')}}--}}

    <!-- Map -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUNwUy389-GS3hRhjAoXogLTwwntRQl6A"></script>
    {{Html::script('js/map.js')}}
    {{Html::script('js/infobox.js')}}

    <script>
        function updateSum() {
            var adults = $('#adults');
            var children = $('#children');
            var sumAdults = Math.abs(parseInt(adults.val())) || 0;
            var sumChildren = Math.abs(parseInt(children.val())) || 0;
            var price = parseFloat('{{$tour->price}}');
            adults.val(sumAdults);
            children.val(sumChildren);
            $('#sum-adults').text(sumAdults);
            $('#sum-children').text(sumChildren);
            $('#total-amount').text((sumAdults + sumChildren) + "x ${{$tour->price}}");
            $('#total-cost').text("$" + (sumAdults + sumChildren)*price);
        }
        $(function() {
            $('body')
                .on('change', '#adults, #children', updateSum)
                .on('click', '.button_inc', updateSum)
                .on('click', '#book-now', function() {
                    var orders = JSON.parse($.cookie('orders'));
                    var sumAdults = Math.abs(parseInt($('#adults').val())) || 0;
                    var sumChildren = Math.abs(parseInt($('#children').val())) || 0;
                    var totalAmount = sumAdults + sumChildren;

                    var index = null;
                    var newOrder = {
                        id: parseInt('{{$tour->id}}'),
                        total_amount: totalAmount,
                    };
                    $(orders).each(function(i, order) {
                        if (order.id === newOrder.id) {
                            index = i;
                        }
                    });
                    if (index === null) {
                        orders.push(newOrder);
                    } else {
                        orders[index] = newOrder;
                    }

                    $.cookie('orders', JSON.stringify(orders), {path: '/'});
                    updateCart();
                });
        })
    </script>
@endsection
