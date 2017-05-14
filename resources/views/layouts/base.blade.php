<!doctype html>
<html lang="vi">
<head>
    @section('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    @show

    <meta name="description" content="@yield('description')"/>

    <title>@yield('title', config('app.name'))</title>

    {{Html::favicon('img/favicon.ico')}}

<!-- BASE CSS -->
    {{Html::style('css/base.css')}}

<!-- SPECIFIC CSS -->
    {{Html::style('css/shop.css')}}
    {{Html::style('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css')}}


<!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{url('css/profile.css')}}">

    <!-- REVOLUTION SLIDER CSS -->
    {{Html::style('rs-plugin/css/settings.css')}}
    {{Html::style('css/extralayers.css')}}


<!-- Range slider -->
    {{Html::style('css/ion.rangeSlider.css')}}
    {{Html::style('css/ion.rangeSlider.skinFlat.css')}}


    <!--[if lt IE 9]>
    {{Html::style('js/html5shiv.min.js')}}
    {{Html::style('js/respond.min.js')}}
    <![endif]-->

    @yield('page-level-styles')

    @section('scripts-top')
        <script>
            window.Laravel = {
                csrfToken: '{{csrf_token()}}',
                appUrl: '{{route('index')}}'
            };
        </script>
    @show
</head>
<body class="@yield('body-class', 'page-container-bg-solid page-boxed')">

@yield('body')

@section('core-plugins')
    <!-- Common scripts -->
    {{Html::script('js/jquery-1.11.2.min.js')}}
    {{Html::script('js/common_scripts_min.js')}}
    {{Html::script('js/functions.js')}}
    {{Html::script('js/jquery-cookie.js')}}
    {{Html::script('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js')}}
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if(Session::has('toastr'))
            @php($toastr = collect(session('toastr')))
            $(function () {
                toastr['{{$toastr->get('level', 'info')}}']('{{$toastr->get('message', '')}}', "{{$toastr->get('title', '')}}");
            });
        @endif
    </script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    {{Html::script('rs-plugin/js/jquery.themepunch.tools.min.js')}}
    {{Html::script('rs-plugin/js/jquery.themepunch.revolution.min.js')}}
    {{Html::script('js/revolution_func.js')}}
@show

@yield('page-level-scripts')


</body>
</html>
