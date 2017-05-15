@extends('layouts.master')

@section('page-level-styles')
    @parent
    <link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">
@endsection

@section('page')
    <section class="promo_full" style="background: url({{Config::get('app.url')}}/img2/cover/6.jpg)">
        <div class="promo_full_wp magnific">
            <div>
                <h3>Amazing destination Vietnam Tours</h3>
                <a href="https://www.youtube.com/watch?v=R-M3gXY_Hds" class="video"><i class="icon-play-circled2-1"></i></a>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li>Tours</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">

        <div class="row">
            <aside class="col-lg-3 col-md-3">
                <p>
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                       aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on
                        map</a>
                </p>

                <div class="box_style_cat">
                    <ul id="cat_nav">
                        <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a></li>
                    </ul>
                </div>

                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false"
                       aria-controls="collapseFilters"
                       id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i
                                class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Price</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>Rating</h6>
                            <ul>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i>
						</span></label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i>
						</span></label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Facility</h6>
                            <ul>
                                <li><label><input type="checkbox">Pet allowed</label></li>
                                <li><label><input type="checkbox">Groups allowed</label></li>
                                <li><label><input type="checkbox">Tour guides</label></li>
                                <li><label><input type="checkbox">Access for disabled</label></li>
                            </ul>
                        </div>
                    </div><!--End collapse -->
                </div><!--End filters col-->
                @include('partials.need_help')
            </aside><!--End aside -->
            <div class="col-lg-9 col-md-9">
                <div id="tools">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>Sort by price</option>
                                    <option value="lower">Lowest price</option>
                                    <option value="higher">Highest price</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_rating" id="sort_rating">
                                    <option value="" selected>Sort by ranking</option>
                                    <option value="lower">Lowest ranking</option>
                                    <option value="higher">Highest ranking</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <a href="all_tours_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#"
                                                                                                            class="bt_filters"><i
                                        class=" icon-list"></i></a>
                        </div>

                    </div>
                </div><!--/tools -->

                @foreach($tours as $index => $tour)
                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.{{$index + 1}}s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="ribbon_3 popular"><span>Popular</span></div>
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                                class="tooltip-content-flip"><span
                                                    class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <div class="img_list"><a href="{{route('tour.show', $tour->id)}}"><img src="{{$tour->url_gird}}"
                                                                                      alt="Image">
                                        <div class="short_info"><i class="icon_set_1_icon-4"></i>{{$tour->city}}</div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tour_list_desc">
                                    <div class="rating"><i class="icon-smile voted"></i><i
                                                class="icon-smile  voted"></i><i
                                                class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                                class="icon-smile"></i>
                                        <small>(75)</small>
                                    </div>
                                    <h3>{{str_limit($tour->name, 30)}}</h3>
                                    <p>{{str_limit($tour->short_description, 250)}}</p>
                                    <ul class="add_info">
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                                <div class="tooltip-content"><h4>Schedule</h4>
                                                    <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                                    <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                                    <strong>Sunday</strong> <span
                                                            class="label label-danger">Closed</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                                <div class="tooltip-content"><h4>Address</h4>
                                                    {{$tour->place}}, {{$tour->city}}<br>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                                <div class="tooltip-content"><h4>Languages</h4>
                                                    English - French - Chinese - Russian - Italian
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                                <div class="tooltip-content"><h4>Parking</h4>
                                                    1-3 Rue Elisée Reclus<br>
                                                    76 Rue du Général Leclerc<br>
                                                    8 Rue Caillaux 94923<br>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                                <div class="tooltip-content"><h4>Transport</h4>
                                                    <strong>Metro: </strong>Musée du Louvre station (line 1)<br>
                                                    <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="price_list">
                                    <div><sup>$</sup>{{$tour->price}}<span class="normal_price_list">${{round($tour->price * 1.5,0,PHP_ROUND_HALF_UP)}}</span>
                                        {{--<small>*Per person</small>--}}
                                        <p><a href="{{route('tour.show', $tour->id)}}" class="btn_1">Details</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!--End strip -->
                @endforeach

                <hr>

                <div class="text-center">
                    {{ $tours->links() }}
                </div><!-- end pagination-->

            </div><!-- End col lg-9 -->
        </div><!-- End row -->
    </div><!-- End container -->
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

    <!-- Map -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUNwUy389-GS3hRhjAoXogLTwwntRQl6A"></script>
    <script>
        window.mapData = JSON.parse('{!! json_encode($mapData) !!}')
    </script>
    {{Html::script('js/map.js')}}
    {{Html::script('js/infobox.js')}}
@endsection
