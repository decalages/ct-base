<div class="clearfix"></div>
<!--- Profile -->
<div class="profile-info">

    <div class="col-xs-12">
        <div class="profile-text">Bonjour {!! Auth::user()->firstname !!}</div>
    </div>
</div>
<!--- Divider -->
<div class="clearfix"></div>
<hr class="divider" />
<div class="clearfix"></div>
<!--- Divider -->
<div class="sidebar-menu">  

    <ul>
        <li class="no_sub">
            <a  {{ (Request::is('membres/dashboard') ? ' class=active' : '') }} href="{!! URL::to('/') !!}"><i class="fa fa-home icon"></i> <span>Accueil</span></a>
        </li>

        <li class="no_sub">
            <a  {{ (Request::is('membres/calendar*') ? ' class=active' : '') }} href="{!! URL::to('calendar') !!}"><i class="fa fa-calendar icon"></i> <span>Calendrier</span></a>
        </li>



    </ul>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
