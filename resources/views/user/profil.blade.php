@extends('layouts.default')

@section('contentheader_title')
<i class='fa fa-user'></i> Profil
@endsection
@section('content')

<div class="row">
  <div class="col-md-9">
     <div class="box">
         <div class="box-body padding">

      
            <form method="post" role="form">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="firstname" class="form-control" id="name" placeholder="Prénom" name="firstname" value="{{ (Session::has('errors')) ? old('firstname', '') : $user->firstname }}">
                </div>
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="name" class="form-control" id="lastname" placeholder="Nom" name="lastname" value="{{ (Session::has('errors')) ? old('lastname', '') : $user->lastname }}">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{{ (Session::has('errors')) ? old('email', '') : $user->email }}">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
                    
                <div class="alert alert-info">
                  <span class="fa fa-info-circle"></span> Laisser ce champ vide si vous ne souhaitez pas changer de mot de passe.
                </div>
                 
                </div>
                <div class="form-group" id="password2">
                    <label for="password">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirmer le mot de passe" name="password_confirmation">
                </div>

                <button type="submit" id="save" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-check"></i></span> enregistrer</button>
                <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span> annuler</a>
            </form>
      </div>
    </div>
  </div>
  <div class="col-md-3">
      <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3>
              <img class="profile-user-img img-responsive img-circle" src="/images/profiles/{{Auth::user()->avatar}}" alt="{{Auth::user()->firstname}} {{Auth::user()->lastname}}" id="img_profile">
                
                {!! Form::open(array('url' => URL::to('/membres/profil/image'), 'method' => 'post', 'class' => 'dropzone','id'=>'mydropzone', 'files'=> true)) !!}
                  <div class="fallback">
                    <input name="file" type="file" />
                  </div>
                    <input type="submit" class="btn btn-danger" style="position: absolute;bottom: -50px;left: 0px;width: 100%;margin: auto;" value="supprimer la photo">
                {!! Form::close() !!}

                <br />
                <a href="#" id="upload_img" class="btn btn-primary btn-block"><b>modifier photo</b></a>
                <div style="height:40px"></div>
            </div>
            <!-- /.box-body -->
          </div>
  </div>
</div>

@endsection


@section('css')
<link href="{{ asset('/plugins/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('scripts')
<script src="/plugins/dropzone/dropzone.js"></script>
<script>
$('#password2').hide();
$("#password").on("change keyup click", function(){
    $('#password2').slideDown();;
})

$('#mydropzone').hide();

$('#upload_img').click(function(){
    $('#mydropzone').show();
    $('#img_profile').hide();
    $('#upload_img').hide();
})

Dropzone.options.mydropzone = {
  maxFilesize: 2, // MB
  uploadMultiple: false,
  accept: function(file, done) {
    console.log("uploaded");
    done();
  },
  init: function() {
    this.on("success", function (file) {
      if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
        window.location.href = "/membres/profil";
      }
    });
  }

};

</script>
@endsection

