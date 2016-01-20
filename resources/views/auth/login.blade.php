@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        
            <div class="login-wrap animated flipInX">
                <div class="panel-heading">Connexion</div>
                <div class="login-block">
                    <form role="form" action="{!! URL::to('/login') !!}" method="post" class="login-form">
                        {!! csrf_field() !!}
                        <div class="form-group login-input{{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="fa fa-user overlay"></i>
                            <input class="form-control text-input" tabindex="1" placeholder="email" type="text" name="email" id="email">
                             @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group login-input{{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="fa fa-key overlay"></i>
                            <input class="form-control text-input" tabindex="2" placeholder="mot de passe" type="password" name="password" id="password">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="checkbox">
                        <label>
                          <input type="checkbox" tabindex="3" name="remember" id="remember" value="1" checked> se souvenir de moi
                        </label>
                        </div>
                
                        
                        <div class="row">
                            <div class="col-sm-6">
                            <button tabindex="4" type="submit" class="btn btn-primary btn-block">connexion</button>
                            </div>
                            <div class="col-sm-6">
                            <a tabindex="5" class="btn btn-default btn-block" href="{!! URL::to('/password/reset') !!}"><i class="fa fa-lock"></i> mot de passe oublié</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

    </div>
</div>


@endsection