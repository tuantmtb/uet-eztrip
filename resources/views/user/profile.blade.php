@extends('layouts.master')

@section('page')
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{$user->img_avatar ? url($user->img_avatar) : ''}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>I am {{$user->name}}</h1>
            </div>
        </div>
    </section><!-- End section -->

    <div class="margin_60 container">
        <div id="tour_guide">
            <p>
                <img src="{{$user->img_avatar ? url($user->img_avatar) : ''}}" alt="Image" class="img-circle styled" width="250px" height="250px">
            </p>
            <h2>{{$user->name}} - Certified tourist guide</h2>
            <p class="lead add_bottom_30">

            </p>
        </div>
        <div class="row">
            <div class="col-md-8 tour">
                <h3>Tour list</h3>
                    @if($user->tours)
                        @foreach($user->tours as $tour)
                            <div  class="col-md-6 tour-item">
                                <a href="{{url('tour/'.$tour->id)}}">
                                    <div class="tour-img" style="background-image: url({{url($tour->url_gird)}}); width: 350px; height: 350px">
                                        <div class="place">
                                            <span>{{$tour->place}}</span>
                                            <h5><i>{{$tour->time_duration}} days</i></h5>
                                        </div>
                                        <div class="price">${{$tour->price}}</div>
                                        <div class="clear"></div>
                                        <div class="desc">{{$tour->description}}</div>
                                    </div>
                                </a>
                               <div class="tour-info">
                                   <div class="user-avatar">
                                       <img src="{{$user->img_avatar ? url($user->img_avatar) : ''}}" alt="">
                                   </div>
                                   <div class="info">
                                       <h4>{{$tour->name}}</h4>
                                       <h5>by <span><i>{{$user->name}}</i></span></h5>
                                   </div>
                               </div>
                            </div>
                        @endforeach
                    @endif
            </div>
            <div class="col-md-4">
                <h3>About me</h3>
                <p>
                   {{$user->description}}
                </p>
            </div>
        </div>
        <!-- end row -->
    </div>

@endsection
