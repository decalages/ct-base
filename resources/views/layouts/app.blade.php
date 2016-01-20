<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') {!! Config::get('config.application_title') !!}</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">

        <!-- Base Css Files -->
        <link href="/assets/admin/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="/assets/admin/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/admin/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/assets/admin/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="/assets/admin/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="/assets/admin/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        
        <!-- Extra CSS Libraries Start -->
        <link href="/assets/admin/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Extra CSS Libraries End -->
        <link href="/assets/admin/css/style-responsive.css" rel="stylesheet" />

    </head>
    <body class="fixed-left login-page">
     
    <!-- Begin page -->
    <div class="container">
        <div class="full-content-center">
            @if(Config::get('config.logo'))
            <p class="text-center"><a href="#"><img src="/images/{!! Config::get('config.logo') !!}" alt="{!! Config::get('config.application_title') !!}"></a></p>
            @else
            <h1 class="text-center">{!! Config::get('config.application_title') !!}</h1>
            
            @endif

            
                @yield('content')
            
            
        </div>
    </div>
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script src="/assets/admin/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="/assets/admin/libs/jquery-icheck/icheck.min.js"></script>

    
    <script>
        var resizefunc = [];
    </script>


    </body>
</html>