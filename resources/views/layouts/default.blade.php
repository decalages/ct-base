<!DOCTYPE html>
<html lang="fr">

@include('layouts.partials.htmlheader')

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-black sidebar-mini">
<div class="wrapper">

    @include('layouts.partials.mainheader')

            <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                @if (! Auth::guest())
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>{!! Auth::user()->firstname !!}</p>
                            <!-- Status -->
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                @endif

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                      <span class="input-group-btn">
                        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">MENU</li>
                    <!-- Optionally, you can add icons to the links -->
                    @include('sidebars.menu')
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- sidebar-admin-panel -->
            <section class="admin-panel">
                @if(Entrust::hasRole('admin'))
                    @include('sidebars.admin')
                @endif
            </section>
            <!-- /.sidebar -->
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

</body>
</html>