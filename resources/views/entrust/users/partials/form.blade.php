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
    @if(Route::currentRouteName() == 'entrust-gui::users.edit')
        <div class="alert alert-info">
          <span class="fa fa-info-circle"></span> Laisser ce champ vide si vous ne souhaitez pas changer de mot de passe.
        </div>
    @endif
</div>
<div class="form-group">
    <label for="password">Confirmer le mot de passe</label>
    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirmer le mot de passe" name="password_confirmation">
</div>


<div class="form-group">
    <label for="roles">Roles</label>
    <select name="roles[]" id="roles" multiple class="form-control">

        @foreach($roles as $index => $role)
            <option value="{{ $index }}" {{ ((in_array($index, old('roles', []))) || ( ! Session::has('errors') && $user->roles->contains('id', $index))) ? 'selected' : '' }}>{{ $role }}</option>
        @endforeach
    </select>
</div>
