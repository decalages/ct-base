@extends('layouts.default')

@section('content')

<h2> <i class='fa fa-group'></i> Rôles</h2>
<div class="widget">
  <div class="widget-content padding">
    <div class="row">
      <div class="col-md-12">
            <form action="{{ route('entrust-gui::roles.store') }}" method="post" role="form">
                @include('entrust.roles.partials.form')
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span> ajouter un rôle</button>
                <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::roles.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span>{{ trans('entrust-gui::button.cancel') }}</a>
            </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css">
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.js"></script>
<script>
(function() {
  $('select').select2();
})();
</script>
@endsection

