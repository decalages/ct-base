

<li class="no_sub {{ (Request::is('entrust/users*') ? ' active' : '') }} ">
    <a  href="{!! URL::to('/entrust/users') !!}"><i class="fa fa-group icon"></i> <span>Utilisateurs</span></a>
</li>

<li class="no_sub {{ (Request::is('entrust/roles*') ? ' active' : '') }}">
    <a   href="{!! URL::to('/entrust/roles') !!}"><i class="fa fa-retweet icon"></i> <span>Rôles</span></a>
</li>

<li class="no_sub {{ (Request::is('entrust/permissions*') ? ' active' : '') }}">
    <a  href="{!! URL::to('/entrust/permissions') !!}"><i class="fa fa-retweet icon"></i> <span>Permissions</span></a>
</li>


<li class="no_sub {{ (Request::is('admin/configuration*') ? ' active' : '') }}">
    <a  href="{!! URL::to('/admin/configuration') !!}"><i class="fa fa-gear icon"></i> <span>Configuration</span></a>
</li>

