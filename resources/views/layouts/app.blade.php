<!DOCTYPE html>
<html lang="fr">
@include('layouts.partials.htmlheader')
<body class="skin-communitime sidebar-mini">
    <div class="content">
        <div class="full-content-center">
            @if(Config::get('config.logo'))
            <p class="text-center"> 
                <a href="#"><img src="/images/{!! Config::get('config.logo') !!}" alt="{!! Config::get('config.application_title') !!}"></a>
            </p>
            @else
            <h1 class="text-center">{!! Config::get('config.application_title') !!}</h1>
            @endif
            @yield('content')
            
        </div>
    </div>
<style>
    .full-content-center {
    width: 100%;
    padding: 5px 0px;
    max-width: 500px;
    margin: 6% auto;
    text-align: center;
}
.login-wrap {
    margin: 20px 10%;
    text-align: left;
    background: rgba(0,0,0,0.1);
    padding: 20px 20px;
    color: #000;
}
</style>
</body>
</html>
