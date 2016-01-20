
<!--- Divider -->
<div class="sidebar-menu admin-menu">

    <ul>

        <li class="no_sub">
            <a  {{ (Request::is('entrust/users*') ? ' class=active' : '') }} href="{!! URL::to('/entrust/users') !!}"><i class="fa fa-group icon"></i> <span>Utilisateurs</span></a>
        </li>

        <li class="no_sub">
            <a  {{ (Request::is('entrust/roles*') ? ' class=active' : '') }} href="{!! URL::to('/entrust/roles') !!}"><i class="fa fa-retweet icon"></i> <span>Rôles</span></a>
        </li>

        <li class="no_sub">
            <a  {{ (Request::is('entrust/permissions*') ? ' class=active' : '') }} href="{!! URL::to('/entrust/permissions') !!}"><i class="fa fa-retweet icon"></i> <span>Permissions</span></a>
        </li>


        <li class="no_sub">
            <a  {{ (Request::is('admin/configuration*') ? ' class=active' : '') }} href="{!! URL::to('/admin/configuration') !!}"><i class="fa fa-gear icon"></i> <span>Configuration</span></a>
        </li>




    </ul>
    <div class="clearfix"></div>
</div>
