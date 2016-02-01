@extends('layouts.default')

@section('contentheader_title')
<i class='fa fa-group'></i> Utilisateurs
@endsection
@section('content')

<div class="box">
  <div class="box-body padding">
    <div class="row">
      <div class="col-md-12">
            <form action="{{ route('entrust-gui::users.update', $user->id) }}" method="post" role="form">
                <input type="hidden" name="_method" value="put">
                @include('entrust.users.partials.form')
                <button type="submit" id="save" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-check"></i></span> enregistrer</button>
                <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span> annuler</a>
            </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="/plugins/select2/select2.min.css">
@endsection
@section('scripts')
<script src="
/plugins/select2/select2.full.min.js"></script>
<script>
(function() {
  $('select').select2();
})();
</script>
@endsection

