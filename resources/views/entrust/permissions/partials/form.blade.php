<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="name">Nom</label>
    <input type="input" class="form-control" id="name" placeholder="Nom" name="name" value="{{ (Session::has('errors')) ? old('name', '') : $permission->name }}">
</div>
<div class="form-group">
    <label for="display_name">Nom affiché</label>
    <input type="input" class="form-control" id="display_name" placeholder="Nom affiché" name="display_name" value="{{ (Session::has('errors')) ? old('display_name', '') : $permission->display_name }}">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="input" class="form-control" id="description" placeholder="Description" name="description" value="{{ (Session::has('errors')) ? old('description', '') : $permission->description }}">
</div>
