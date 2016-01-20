@extends('layouts.default')

@section('content')



<h2> <i class='fa fa-group'></i> Rôles</h2>
<div class="widget">
  <div class="widget-content padding">
    <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-4" style="text-align:right;padding-bottom:20px;">
          <a class="btn btn-labeled btn-primary" href="{{ route('entrust-gui::roles.create') }}"><i class="fa fa-plus"></i> ajouter un rôle</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Nom</th>
                <th></th>
                <th class="actions">Actions</th>
            </tr>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->display_name }}</th>
                    <td>{{ $role->name }}</th>
                    <td class="actions">
                        <form action="{{ route('entrust-gui::roles.destroy', $role->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::roles.edit', $role->id) }}"><span class="btn-label"><i class="fa fa-pencil"></i></span> modifier</a>
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
        title: "Supprimer le rôle ?",
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