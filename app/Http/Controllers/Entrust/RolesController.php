<?php
namespace App\Http\Controllers\Entrust;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Permission;
use App\Role;
use Entrust;
use App\Http\Requests;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    protected $user;
    protected $role;
    protected $permission;


     public function __construct(User $user, Role $role, Permission $permission)
    {
        $this->middleware('auth');
        $this->user = $user;
        $this->role = $role;
        $this->permission = $permission;

    }
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $roles = Role::get();
        return view('entrust.roles.index', compact('roles'));
    }

    public function edit($id)
    {
        $role = Role::whereId($id)->first();
        $relations = Permission::lists('name', 'id');;
        return view('entrust.roles.edit', compact('relations', 'role'));
    }

    public function update(Request $request, $id)
    {

        $role = Role::whereId($id)->first();

        $data = $request->all();
        $role->name =  $data['name'];
        $role->display_name =  $data['display_name'];
        $role->description =  $data['description'];

        //$role->perms()->sync($this->permission->preparePermissionsForSave($data['permissions']));
        //dd($request->permissions);
        $role->savePermissions($request->permissions);


        $role->save();
            alert()->success('...', 'Rôle modifié !')->autoclose(3500);
            return redirect('/entrust/roles/'.$request->id.'/edit');


    }

    public function create(){

        $role = new Role;
        $relations = Permission::lists('name', 'id');;
        return view('entrust.roles.create', compact('role', 'relations'));

    }

       public function store(Request $request)
    {

        $role = new Role;

        $data = $request->all();
        $role->name =  $data['name'];
        $role->display_name =  $data['display_name'];
        $role->description =  $data['description'];


        $role->save();

        $role = Role::whereId($role->id)->first();

        $role->saveRoles($request->roles);

        $role->save();
            alert()->success('...', 'Rôle enregistré !')->autoclose(3500);
            return redirect('/entrust/roles/'.$role->id.'/edit');


    }

     public function destroy($id){

        $role = Role::whereId($id)->first();
        $role->delete();
        alert()->success('...', 'Rôle supprimé !')->autoclose(3500);
            return redirect('/entrust/roles');
  }


}