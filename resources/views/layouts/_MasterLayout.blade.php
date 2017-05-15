<html>
    <header>
        <title>@yield('title')</title>
        <link href="{!! asset('/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" >
        <link href="{!! asset('/css/main.css') !!}" rel="stylesheet" type="text/css" >
        <link href="{!! asset('/css/bootstrap-rtl.min.css') !!}" rel="stylesheet" type="text/css" >
    </header>
    <body>

        @include('layouts._header')
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    @yield('content')
                </div>
                <div class="col-sm-3">
                    @include('layouts._sidebar')
                </div>
            </div>

        </div>
        @include('layouts._footer')
        <script src="{{ URL::to('/js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('/js/bootstrap.min.js') }}"></script>
    </body>

</html>