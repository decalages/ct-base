@extends('layouts.default')

@section('contentheader_title')
<i class='fa fa-group'></i> Utilisateurs
@endsection

@section('content')

<div class="box">
  <div class="box-body padding">
    <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-4" style="text-align:right;padding-bottom:20px;">
          <a class="btn btn-labeled btn-primary" href="{{ route('entrust-gui::users.create') }}"><i class="fa fa-plus"></i> ajouter un utilisateur</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped">
          <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th class="actions">Actions</th>
          </tr>
          @foreach($users as $user)

            <tr>
              <td>{{ $user->firstname }}</th>
              <td>{{ $user->lastname }}</th>
              <td>{{ $user->email }}</th>
              <td class="actions">
                <form action="{{ route('entrust-gui::users.destroy', $user->id) }}" method="post">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.edit', $user->id) }}"><span class="btn-label"><i class="fa fa-pencil"></i></span> modifier</a>
                  <button type="submit" class="btn btn-labeled btn-danger del"><span class="btn-label"><i class="fa fa-trash"></i></span> supprimer</button>
                </form>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>



@endsection

@section('scripts')
<script>
  $( ".del" ).each(function() {
      $(this).on("click", function(e){
      var form = $(this).parent();
      e.preventDefault();
      swal({
        title: "Supprimer l'utilisateur ?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Supprimer',
        cancelButtonText: "Annuler",
        closeOnConfirm: false,
        closeOnCancel: true
      },
    function(isConfirm){
      if (isConfirm){
        form.submit();
      } 
    });
  });
});
</script>
@endsection