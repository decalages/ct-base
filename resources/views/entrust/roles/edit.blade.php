@extends('layouts.default')
@section('contentheader_title')
<i class='fa fa-group'></i> Rôles
@endsection

@section('content')

<div class="box">
  <div class="box-body padding">
    <div class="row">
      <div class="col-md-12">
            <form action="{{ route('entrust-gui::roles.update', $role->id) }}" method="post" role="form">
                <input type="hidden" name="_method" value="put">
                @include('entrust.roles.partials.form')
                <button type="submit" id="save" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-check"></i></span> enregistrer</button>
                <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::roles.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span> annuler</a>
            </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css">
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.js"></script>
<script>
(function() {
  $('select').select2();
})();
</script>
@endsection

