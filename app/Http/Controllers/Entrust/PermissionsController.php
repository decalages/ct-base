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

class PermissionsController extends Controller
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
        $permissions = Permission::get();
        return view('entrust.permissions.index', compact('permissions'));
    }

    public function edit($id)
    {
        $permission = Permission::whereId($id)->first();
        return view('entrust.permissions.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {

        $permission = Permission::whereId($id)->first();

        $data = $request->all();
        $permission->name =  $data['name'];
        $permission->display_name =  $data['display_name'];
        $permission->description =  $data['description'];


        $permission->save();
            alert()->success('...', 'Permission modifiée !')->autoclose(3500);
            return redirect('/entrust/permissions/'.$request->id.'/edit');


    }

    public function create(){

        $permission = new Permission;
        $relations = Permission::lists('name', 'id');;
        return view('entrust.permissions.create', compact('permission', 'relations'));

    }

    public function store(Request $request)
    {

        $permission = new Permission;

        $data = $request->all();
        $permission->name =  $data['name'];
        $permission->display_name =  $data['display_name'];
        $permission->description =  $data['description'];


        $permission->save();

        $permission->save();
            alert()->success('...', 'Permission enregistrée !')->autoclose(3500);
            return redirect('/entrust/permissions/'.$permission->id.'/edit');


    }

     public function destroy($id){

        $permission = Permission::whereId($id)->first();
        $permission->delete();
        alert()->success('...', 'Permission supprimée !')->autoclose(3500);
            return redirect('/entrust/permissions');
  }


}