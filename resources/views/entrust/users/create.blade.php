@extends('layouts.default')

@section('contentheader_title')
<i class='fa fa-group'></i> Utilisateurs
@endsection

@section('content')
<div class="box">
  <div class="box-body padding">
    <div class="row">
      <div class="col-md-12">
	      <form action="{{ route('entrust-gui::users.store') }}" method="post" role="form">
		    @include('entrust.users.partials.form')
		    <button type="submit" id="create" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span> créer</button>
		    <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span> supprimer</a>
		</form>
	</div>
   </div>
</div>
@endsection
