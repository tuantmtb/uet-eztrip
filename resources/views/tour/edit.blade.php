@extends('layouts.master')

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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@endsection

@section('page')
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{$tour->url_cover}}"
             data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1 id="name-preview">{{$tour->name}}</h1>
                        <span id="place-preview">{{$tour->place}}</span>
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
                <li><a href="{{route('tour.show', $tour->id)}}">{{$tour->name}}</a></li>
                <li>Edit</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        {{Form::model($tour, ['method' => 'post', 'route' => ['tour.update', $tour->id], 'id' => 'edit-form'])}}
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">

                <div id="single_tour_feat">
                    <ul>
                        <li><i class="icon_set_1_icon-4"></i>Museum</li>
                        <li id="time_duration_preview"><i class="icon_set_1_icon-83"></i>{{$tour->time_duration}} Hours</li>
                        <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                        <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                        <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                        <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                        <li><i class="icon_set_1_icon-29"></i>{{$tour->tourguide ? $tour->tourguide->name: 'Tourguide'}}</li>
                    </ul>
                </div>

                <div class="row">
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                        <div class="col-md-3">
                            <label for="name"><h3>Name <span class="required">*</span></h3></label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" id="name" placeholder="Name" class="form-control" required value="{{$tour->name}}">
                            <span class="help-block help-block-error">{{$errors->first('name')}}</span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="form-group {{$errors->has('short_description') ? 'has-error' : ''}}">
                        <div class="col-md-3">
                            <label for="short_description"><h3>Short description</h3></label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="short_description" id="short_description" placeholder="Short description" class="form-control" rows="5">{{$tour->short_description}}</textarea>
                            <span class="help-block help-block-error">{{$errors->first('short_description')}}</span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                        <div class="col-md-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-md-9">
                            <textarea name="description" id="description" placeholder="Description" cols="30" rows="10">{!! $tour->description !!}</textarea>
                            <span class="help-block help-block-error">{{$errors->first('description')}}</span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="form-group {{$errors->has('place') ? 'has-error' : ''}}">

                        <div class="col-md-3">
                            <label for="place"><h3>Place</h3></label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="place" id="place" placeholder="Place" class="form-control" value="{{$tour->place}}">
                            <span class="help-block help-block-error">{{$errors->first('place')}}</span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="form-group {{$errors->has('price') ? 'has-error' : ''}}">

                        <div class="col-md-3">
                            <label for="price"><h3>Price ($) <span class="required">*</span></h3></label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" min=".01" step=".01" name="price" id="price" placeholder="Price" class="form-control" required value="{{$tour->price}}">
                            <span class="help-block help-block-error">{{$errors->first('price')}}</span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="form-group {{$errors->has('time_duration') ? 'has-error' : ''}}">

                        <div class="col-md-3">
                            <label for="time_duration"><h3>Time duration (hours) <span class="required">*</span></h3></label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" min="0" name="time_duration" id="time_duration" placeholder="Time duration" class="form-control" required value="{{$tour->time_duration}}">
                            <span class="help-block help-block-error">{{$errors->first('time_duration')}}</span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="form-group {{$errors->has('url_cover') ? 'has-error' : ''}}">

                        <div class="col-md-3">
                            <label for="url_cover"><h3>Url cover <span class="required">*</span> <br><small>(1800px x 700px)</small> </h3></label>
                        </div>
                        <div class="col-md-9">
                            <input type="url" name="url_cover" id="url_cover" placeholder="Url cover" class="form-control" required value="{{$tour->url_cover}}">
                            <span class="help-block help-block-error">{{$errors->first('url_cover')}}</span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="form-group {{$errors->has('url_gird') ? 'has-error' : ''}}">

                        <div class="col-md-3">
                            <label for="url_gird"><h3>Url grid <span class="required">*</span><br><small>(800px x 533px)</small> </h3></label>
                        </div>
                        <div class="col-md-9">
                            <input type="url" name="url_gird" id="url_gird" placeholder="Url grid" class="form-control" required value="{{$tour->url_gird}}">
                            <span class="help-block help-block-error"> {{$errors->first('url_gird')}}</span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%">Update tours</button>
                    </div>
                </div>

                <hr>


            </div><!--End  single_tour_desc-->

            <aside class="col-md-4">

                @include('partials.need_help')

            </aside>

        </div><!--End row -->
        {{Form::close()}}
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

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
    <script>
        $(function() {
           $('#description').summernote({height: 300, placeholder: 'Description'});

           $('#name').change(function () {
               $('#name-preview').text($(this).val());
           });

           $('#place').change(function() {
              $('#place-preview').text($(this).val());
           });

           $('#time_duration').change(function() {
               $('#time_duration_preview').html('<i class="icon_set_1_icon-83"></i>' + $(this).val() + ' Hours');
           });

           $('#url_cover').change(function() {
               var value = $(this).val() || '{{asset('img2/cover.jpg')}}';
               $('.parallax-slider').attr('src', value);
           });

           $('#price').change(function() {
               $('#price_single_main').html('from/per person <span><sup>$</sup>' + $(this).val());
           });
        });
    </script>
@endsection
