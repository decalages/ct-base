<!DOCTYPE html>
<html lang="fr">
@include('layouts.partials.htmlheader')
<body class="skin-communitime sidebar-mini">
<div class="wrapper">

    @include('layouts.partials.mainheader')

            <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

             <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">



                <!-- Sidebar user panel (optional) -->
                @if (! Auth::guest())
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/images/profiles/{{Auth::user()->avatar}}" class="img-circle" alt="{!! Auth::user()->firstname !!} {!! Auth::user()->lastname !!}" />
                        </div>
                        <div class="pull-left info">
                            <p>{!! Auth::user()->firstname !!} {!! Auth::user()->lastname !!}</p>
                            <!-- Status -->
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                @endif

{{--                 <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                      <span class="input-group-btn">
                        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                </form>
                <!-- /.search form --> --}}

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    @include('sidebars.menu')
                </ul><!-- /.sidebar-menu -->
            </section>
           
        </aside>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('layouts.partials.controlsidebar')

    @include('layouts.partials.footer')

</div><!-- ./wrapper -->

@include('layouts.partials.scripts')
<!-- scripts -->
@yield('scripts')


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