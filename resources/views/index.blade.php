@extends('layouts.master')

@section('page')
    <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                    data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_1.jpg"
                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center"
                         data-y="center" data-hoffset="0" data-voffset="-20"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Affordable Paris
                        Tours
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center"
                         data-y="center" data-hoffset="0" data-voffset="15"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1"
                         style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            City Tours / Tour Tickets / Tour Guides
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center"
                         data-hoffset="0" data-voffset="70"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next"
                         style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a
                                href='single_tour.html' class=" button_intro outline">Read more</a>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                    data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_4.jpg"
                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center"
                         data-y="center" data-hoffset="0" data-voffset="-20"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">More than 100 tours
                        available
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center"
                         data-y="center" data-hoffset="0" data-voffset="15"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1"
                         style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            Historic Buildings / Open Bus Tours / Museums Guides
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center"
                         data-hoffset="0" data-voffset="70"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next"
                         style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a
                                href='single_tour.html' class=" button_intro outline">Read more</a>
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                    data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_6.jpg"
                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center"
                         data-y="center" data-hoffset="0" data-voffset="-20"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Discover fantastic
                        places
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center"
                         data-y="center" data-hoffset="0" data-voffset="15"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1"
                         style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            We offer a variety of services and options
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center"
                         data-hoffset="0" data-voffset="70"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next"
                         style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a
                                href='single_tour.html' class=" button_intro outline">Read more</a>
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                    data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_5.jpg"
                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center"
                         data-y="center" data-hoffset="0" data-voffset="-20"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">CityTours provides
                        tour
                        guides
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center"
                         data-y="center" data-hoffset="0" data-voffset="15"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1"
                         style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            Visit museum with a dedicated tour guide
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center"
                         data-hoffset="0" data-voffset="70"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next"
                         style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a
                                href='single_tour.html' class=" button_intro outline">Read more</a>
                    </div>
                </li>


            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!-- End Slider -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>Best Destinations in <span> Viet Nam</span></h2>
            <p>Shown the secrets of your destination that no tourist knows</p>
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_1.jpg" class="img-responsive" alt="Image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>Historic Buildings<span
                                        class="price"><sup>$</sup>39</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Arc Triomphe</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_2.jpg" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="badge_save">Save<strong>30%</strong></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-43"></i>Churches<span class="price"><sup>$</sup>45</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Notredame</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_3.jpg" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>Historic Buildings<span
                                        class="price"><sup>$</sup>48</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Versailles</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_4.jpg" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="badge_save">Save<strong>30%</strong></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-30"></i>Walking tour<span class="price"><sup>$</sup>36</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Pompidue</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_14.jpg" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-28"></i>Skyline tours<span class="price"><sup>$</sup>42</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Tour Eiffel</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_5.jpg" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>Historic Buildings<span
                                        class="price"><sup>$</sup>40</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Pantheon</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.7s">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_8.jpg" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-3"></i>City sightseeing<span
                                        class="price"><sup>$</sup>35</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Open Bus</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.8s">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_9.jpg" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-4"></i>Museums<span class="price"><sup>$</sup>38</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Louvre museum</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_12.jpg" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-14"></i>Eat &amp; drink<span
                                        class="price"><sup>$</sup>25</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Boulangerie</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

        </div><!-- End row -->
        <p class="text-center nopadding">
            <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (144) </a>
        </p>
    </div><!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2>Insider <span>Guides </span>to your favorite destinations</h2>
                <p>
                    Discover guides in Viet Nam
                </p>
            </div>


            <div class="banner colored">
                <h4>Best Destinations in <span>Viet Nam</span></h4>
                <p>
                    Shown the secrets of your destination that no tourist knows
                </p>
                <a href="single_tour.html" class="btn_1 white">Read more</a>
            </div>
            <div class="row">
                <div class="main_title">
                    <h2>The best <span>THINGS </span>to buy in Vietnam</h2>
                </div>
                <div class="col-md-12">
                    <div class="shop-section">

                        <div class="row">
                            <div class="shop-item col-md-2">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="shop-single.html"><img
                                                        src="img/products/image-1.jpg"
                                                        alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="shopping-cart.html" class="btn_shop"><span
                                                        class="icon-basket"></span>
                                                <div class="tool-tip">
                                                    Add to cart
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span
                                                        class="icon-heart-8"></span>
                                                <div class="tool-tip">
                                                    Add to Fav
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    View
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div>
                                        <h3><a href="shop-single.html">Travel Book</a></h3>
                                        <div class="price">
                                            <span class="offer">$20.00</span> $15.00
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-md-2">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="shop-single.html"><img
                                                        src="img/products/image-2.jpg"
                                                        alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="shopping-cart.html" class="btn_shop"><span
                                                        class="icon-basket"></span>
                                                <div class="tool-tip">
                                                    Add to cart
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span
                                                        class="icon-heart-8"></span>
                                                <div class="tool-tip">
                                                    Add to Fav
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    View
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div>
                                        <h3><a href="shop-single.html">World guide</a></h3>
                                        <div class="price">
                                            <span class="offer">$10.00</span> $5.00
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-md-2">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="shop-single.html"><img
                                                        src="img/products/image-3.jpg"
                                                        alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="shopping-cart.html" class="btn_shop"><span
                                                        class="icon-basket"></span>
                                                <div class="tool-tip">
                                                    Add to cart
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span
                                                        class="icon-heart-8"></span>
                                                <div class="tool-tip">
                                                    Add to Fav
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    View
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div>
                                        <h3><a href="shop-single.html">Best places to visit</a></h3>
                                        <div class="price">
                                            $22.00
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-md-2">
                                <div class="inner-box">
                                    <!--Image Box-->
                                    <div class="image-box">
                                        <figure class="image"><a href="shop-single.html"><img
                                                        src="img/products/image-4.jpg"
                                                        alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="shopping-cart.html" class="btn_shop"><span
                                                        class="icon-basket"></span>
                                                <div class="tool-tip">
                                                    Add to cart
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span
                                                        class="icon-heart-8"></span>
                                                <div class="tool-tip">
                                                    Add to Fav
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    View
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div>
                                        <h3><a href="shop-single.html">World Streets</a></h3>
                                        <div class="price">
                                            $22.00
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-md-2">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="shop-single.html"><img
                                                        src="img/products/image-5.jpg"
                                                        alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="shopping-cart.html" class="btn_shop"><span
                                                        class="icon-basket"></span>
                                                <div class="tool-tip">
                                                    Add to cart
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span
                                                        class="icon-heart-8"></span>
                                                <div class="tool-tip">
                                                    Add to Fav
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    View
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div>
                                        <h3><a href="shop-single.html">Travel guide V2</a></h3>
                                        <div class="price">
                                            $15.00
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                            <div class="shop-item col-md-2">
                                <div class="inner-box">
                                    <!--Image Box-->
                                    <div class="image-box">
                                        <figure class="image"><a href="shop-single.html"><img
                                                        src="img/products/image-6.jpg"
                                                        alt=""></a></figure>
                                        <div class="item-options clearfix">
                                            <a href="shopping-cart.html" class="btn_shop"><span
                                                        class="icon-basket"></span>
                                                <div class="tool-tip">
                                                    Add to cart
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span
                                                        class="icon-heart-8"></span>
                                                <div class="tool-tip">
                                                    Add to Fav
                                                </div>
                                            </a>
                                            <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                                <div class="tool-tip">
                                                    View
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_description">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div>
                                        <h3><a href="shop-single.html">Adventures</a></h3>
                                        <div class="price">
                                            <span class="offer">$20.00</span> $15.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--End Shop Item-->

                    </div>
                </div>
            </div>

        </div><!-- End container -->
    </div><!-- End white_bg -->

    <section class="promo_full">
        <div class="promo_full_wp magnific">
            <div>
                <h3>Amazing destination Vietnam Tours</h3>
                <a href="https://www.youtube.com/watch?v=R-M3gXY_Hds" class="video"><i class="icon-play-circled2-1"></i></a>
            </div>
        </div>
    </section><!-- End section -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>Some <span>good</span> reasons</h2>
        </div>

        <div class="row">
            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span>+520</span> tours</h3>
                    <p>
                        Awesome experience and made your trip more beautiful !
                    </p>

                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-30"></i>
                    <h3><span>+100</span> local tour guide</h3>
                    <p>
                        Local guide was very friendly and accommodating.
                    </p>

                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-57"></i>
                    <h3><span>24/24 </span> Support</h3>
                    <p>
                        100% money back guaranteed.
                    </p>
                </div>
            </div>

        </div><!--End row -->

        <hr>

        <div class="row">
            <div class="col-md-8 col-sm-6 hidden-xs">
                <img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3><span>Get started</span> with ezTrip</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor
                    imperdiet deterruisset.
                </p>
                <ul class="list_order">
                    <li><span>1</span>Select your preferred tours</li>
                    <li><span>2</span>Purchase tickets and options</li>
                    <li><span>3</span>Made your trip more beautiful</li>
                </ul>
                <a href="all_tour_list.html" class="btn_1">Start now</a>
            </div>
        </div><!-- End row -->

    </div><!-- End container -->
@endsection