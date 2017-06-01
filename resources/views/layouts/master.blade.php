@extends('layouts.base')

@section('body')

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <header id="plain">
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"><i
                                class="icon-phone"></i><strong>{{config('app.phone')}}</strong>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                       id="access_link">{{Auth::check() ? 'Hello, ' .Auth::user()->name : 'Login'}}</a>
                                    <div class="dropdown-menu">
                                        @if(!Auth::check())
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="#" class="bt_facebook">
                                                        <i class="icon-facebook"></i>Facebook </a>
                                                </div>
                                            </div>
                                            <div class="login-or">
                                                <hr class="hr-or">
                                                <span class="span-or">or</span>
                                            </div>
                                            <form role="form" method="POST"
                                                  action="{{ route('login') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email"
                                                           placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="password"
                                                           placeholder="Password">
                                                </div>
                                                <a id="forgot_pw" href="#">Forgot password?</a>
                                                <input type="submit" value="Sign in" id="Sign_in"
                                                       class="button_drop">
                                                <a id="Sign_up" href="{{route('register')}}"
                                                   class="button_drop outline">Sign up</a>
                                            </form>
                                        @else
                                            <form role="form" method="POST"
                                                  action="{{ route('logout') }}">
                                                <a href="#">Hello, {{Auth::user()->name}}</a>
                                                {{ csrf_field() }}

                                                <a href="{{route('order.my')}}" class="button_drop">My orders</a>
                                                <input type="submit" value="Logout"
                                                       class="button_drop outline">
                                            </form>
                                        @endif
                                    </div>

                                </div><!-- End Dropdown access -->
                            </li>
                            <li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{route('home')}}">
                            {{Html::image('img/logo_sticky.png', 'ezTrip', ['width' => 160, 'height' => 34, 'data-retina' => true, 'class' => 'logo_normal'])}}
                        </a>
                        <a href="{{route('home')}}">
                            {{Html::image('img/logo_sticky.png', 'ezTrip', ['width' => 160, 'height' => 34, 'data-retina' => true, 'class' => 'logo_sticky'])}}
                        </a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            {{Html::image('img/logo_sticky.png', 'ezTrip', ['width' => 160, 'height' => 34, 'data-retina' => true])}}
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="{{route('home')}}" class="show-submenu">Home</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours <i
                                            class="icon-down-open-mini"></i></a>
                                <ul>
                                    @permission('create_tour')
                                    <li><a href="{{route('tour.create')}}">
                                            <i class="fa fa-plus"></i> Create tours
                                        </a></li>
                                    @endpermission
                                    <li><a href="{{route('tour.lists')}}">Ha Noi</a></li>
                                    <li><a href="{{route('tour.lists')}}">Ho Chi Minh</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <div class="dropdown dropdown-search">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon-search"></i></a>
                                <div class="dropdown-menu">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" style="margin-left:0;">
                                            <i class="icon-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class=" icon-basket-1"></i>Tour orders ({{Cart::content()->count()}})
                                </a>
                                <ul class="dropdown-menu" id="cart_items">
                                    @foreach(Cart::content() as $cart)
                                        <li class="cart_item">
                                            <div class="image">
                                                <img src="{{$cart->options->get('url_gird')}}">
                                            </div>
                                            <strong>
                                                <a href="{{route('tour.show', $cart->id)}}">{{$cart->name}}</a> {{$cart->qty}}
                                                x ${{$cart->price}}
                                            </strong>
                                            <a href="javascript:" class="action"
                                               onclick="deleteCart('{{$cart->rowId}}')"><i class="icon-trash"></i></a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <div>Total: $<span>{{Cart::total()}}</span></div>
                                        <a href="{{route('cart')}}" class="button_drop">Go to cart</a>
                                        <a href="{{route('cart.payment')}}" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

    <main>
        <div class="page-container">
            <div class="page-content-wrapper">
                @yield('page')
            </div>
        </div>
    </main>

    <div id="toTop" style="z-index: 2;"></div><!-- Back to top button -->
    <div id="overlay"></div><!-- Mask on input focus -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                    <a href="tel://{{config('app.phone')}}" id="phone">{{config('app.phone')}}</a>
                    <a href="mailto:{{config('app.email')}}" id="email_footer">{{config('app.email')}}</a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">Vietnamese</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p>© ezTrip 2017</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

    <div hidden>
        {{Form::open(['method' => 'post', 'route' => 'cart.delete', 'id' => 'cart-delete-form'])}}
        {{Form::hidden('rowId')}}
        {{Form::close()}}
    </div>
@endsection

@section('page-level-scripts')
    @parent
    <script>
        function deleteCart(rowId) {
            var form = $('#cart-delete-form');
            form.find('input[name="rowId"]').val(rowId);
            form.submit();
        }
    </script>
@endsection