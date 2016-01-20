<li class="no_sub  {{ (Request::is('membres/dashboard') ? ' active' : '') }}">
    <a href="{!! URL::to('/') !!}"><i class="fa fa-home icon"></i> <span>Accueil</span></a>
</li>

<li class="no_sub  {{ (Request::is('membres/calendar*') ? ' active' : '') }}">
    <a  href="{!! URL::to('calendar') !!}"><i class="fa fa-calendar icon"></i> <span>Calendrier</span></a>
</li>


{{--
<li class="treeview">
    <a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="#">Link in level 2</a></li>
        <li><a href="#">Link in level 2</a></li>
    </ul>
</li> 
--}}


