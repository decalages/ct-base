<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') {!! Config::get('config.application_title') !!}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Stéphane Broquet">

        <!-- Base Css Files -->
        <link href="/assets/admin/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="/assets/admin/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/admin/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/assets/admin/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="/assets/admin/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="/assets/admin/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="/assets/admin/libs/magnific-popup/magnific-popup.css" rel="stylesheet" />
        <link href="/assets/admin/libs/ios7-switch/ios7-switch.css" rel="stylesheet" />
        <link href="/assets/admin/libs/pace/pace.css" rel="stylesheet" />
        <link href="/assets/admin/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="/assets/admin/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="/assets/admin/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <link href="/assets/admin/libs/jquery-notifyjs/styles/metro/notify-metro.css" rel="stylesheet" type="text/css" />
        <link href="/assets/admin/libs/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />


        <!-- Extra CSS Librarie
         Start -->
        <link href="/assets/admin/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/assets/admin/css/custom.css" rel="stylesheet" type="text/css" />
        @yield('css')
                <!-- Extra CSS Libraries End -->
        <link href="/assets/admin/css/style-responsive.css" rel="stylesheet" />

        @include('layouts.css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="/assets/admin/img/favicon.ico">

    </head>


   <body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">

<!-- Top Bar Start -->
<div class="topbar">
 <div class="topbar-container">
    <div class="topbar-left">
        <div class="mainmenu">
            <h1>menu</h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">

                <div class="navbar-left logo">
                @if(Config::get('config.logo'))
                <img src="/images/tn-{!! Config::get('config.logo') !!}" alt="{!! Config::get('config.application_title') !!}">
                @else
                <span style="line-height: 48px;font-size: 20px;font-weight: 800;">{!! Config::get('config.application_title') !!}</span>
                @endif

                </div>

                <ul class="nav navbar-nav navbar-right top-navbar">

                    <li class="topbar-profile">
                        <a href="#" class="dropdown-toggle"><strong>{!! Auth::user()->firstname." ".Auth::user()->lastname !!}</strong> </a>

                    </li>
                    <li class="topbar-profile"><a href="/logout" id="logout" style="cursor:pointer"><i class="icon-logout-1"></i> Déconnexion</a></li>

                </ul>



            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
 </div>
</div>
<!-- Top Bar End -->

<!-- Left Sidebar Start -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        @include('sidebars.menu')
        @if(Entrust::hasRole('admin'))
            @include('sidebars.admin')
        @endif

    </div>

</div>
<!-- Left Sidebar End -->


        <!-- Right Sidebar here -->
        <!-- Start right content -->
        <div class="content-page">
            <div class="content">



            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->



                @yield('content')
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->
            </div>
        </div>
        <!-- End right content -->

 </div>
    <!-- End of page -->
        <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->

    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/assets/admin/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="/assets/admin/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/admin/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="/assets/admin/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
    <script src="/assets/admin/libs/jquery-detectmobile/detect.js"></script>
    <script src="/assets/admin/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
    <script src="/assets/admin/libs/ios7-switch/ios7.switch.js"></script>
    <script src="/assets/admin/libs/fastclick/fastclick.js"></script>
    <script src="/assets/admin/libs/jquery-blockui/jquery.blockUI.js"></script>
    <script src="/assets/admin/libs/bootstrap-bootbox/bootbox.min.js"></script>
    <script src="/assets/admin/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="/assets/admin/libs/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="/assets/admin/libs/nifty-modal/js/classie.js"></script>
    <script src="/assets/admin/libs/nifty-modal/js/modalEffects.js"></script>
    <script src="/assets/admin/libs/sortable/sortable.min.js"></script>
    <script src="/assets/admin/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
    <script src="/assets/admin/libs/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/admin/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/admin/libs/pace/pace.min.js"></script>
    <script src="/assets/admin/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="/assets/admin/libs/jquery-icheck/icheck.min.js"></script>
    <script src="/assets/admin/libs/raphael/raphael-min.js"></script>
    <script src="/assets/admin/libs/morrischart/morris.min.js"></script>
    <script src="/assets/admin/libs/sweetalert/sweetalert.min.js"></script>


    <!-- Demo Specific JS Libraries -->
    <script src="/assets/admin/libs/prettify/prettify.js"></script>

    <!-- Page Specific JS Libraries -->

    <script src="/assets/admin/libs/jquery-knob/jquery.knob.js"></script>
    <script src="/assets/admin/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/assets/admin/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js"></script>
     <script src="/assets/admin/libs/bootstrap-xeditable/js/bootstrap-editable.min.js"></script>
    <script src="/assets/admin/libs/bootstrap-calendar/js/bic_calendar.min.js"></script>

    <script src="/assets/admin/libs/jquery-notifyjs/notify.min.js"></script>
    <script src="/assets/admin/libs/jquery-notifyjs/styles/metro/notify-metro.js"></script>
    <script src="/assets/admin/js/pages/notifications.js"></script>

    @yield('scripts')
    <script src="/assets/admin/js/init.js"></script>
    <script>
       
        </script>

    <!-- Notifications -->
    @if (Session::has('sweet_alert.alert'))
    <script>
        swal({
            text: "{!! Session::get('sweet_alert.text') !!}",
            title: "{!! Session::get('sweet_alert.title') !!}",
            timer: {!! Session::get('sweet_alert.timer') !!},
            type: "{!! Session::get('sweet_alert.type') !!}",
            showConfirmButton: "{!! Session::get('sweet_alert.showConfirmButton') !!}",
            confirmButtonText: "{!! Session::get('sweet_alert.confirmButtonText') !!}",
            confirmButtonColor: "#AEDEF4"
        });
    </script>
    @endif
    <!-- ./ notifications -->

    </body>
</html>
