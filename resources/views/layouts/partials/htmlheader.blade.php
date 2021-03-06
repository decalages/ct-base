<head>
    <meta charset="UTF-8">
    <title>@yield('title') {!! Config::get('config.application_title') !!}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

       
    <link href="{{ asset('/css/colors.css') }}" rel="stylesheet" type="text/css" />


    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />

    <style>
.skin-communitime .main-header li.user-header {
  background-color: {!! Config::get('config.color1') !!};
}
.skin-communitime .sidebar-menu > li:hover > a,
.skin-communitime .sidebar-menu > li.active > a {
  border-left-color: {!! Config::get('config.color1') !!};
}
.skin-communitime .sidebar-menu > li:hover > a, 
.skin-communitime .sidebar-menu > li.active > a {
    color: #ffffff;
    border-left-color: {!! Config::get('config.color1') !!};
}
.skin-communitime .treeview-menu > li.active > a,
.skin-communitime .treeview-menu > li > a:hover {
  background: #2d363c;
  border-left: solid 3px {!! Config::get('config.color1') !!};
}
.skin-communitime.layout-top-nav .main-header > .logo {
  background-color: {!! Config::get('config.color1') !!};
}
.bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
    background-color: {!! Config::get('config.color1') !!}!important;
}


    </style>


    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
