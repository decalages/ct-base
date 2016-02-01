<li class="no_sub  {{ (Request::is('membres/dashboard') ? ' active' : '') }}">
    <a href="{!! URL::to('/') !!}"><i class="fa fa-home icon"></i> <span>Accueil</span></a>
</li>

<li class="no_sub  {{ (Request::is('membres/calendar*') ? ' active' : '') }}">
    <a  href="{!! URL::to('calendar') !!}"><i class="fa fa-calendar icon"></i> <span>Calendrier</span></a>
</li>


@if(Entrust::hasRole('admin'))
<li class="treeview {{ (Request::is('entrust*') ? ' active' : '') }} {{ (Request::is('admin*') ? ' active' : '') }}">
    <a href="#"><i class='fa fa-link'></i> <span>Administration</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        @include('sidebars.admin')
    </ul>
</li> 
@endif