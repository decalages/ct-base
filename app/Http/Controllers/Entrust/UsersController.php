<?php
namespace App\Http\Controllers\Entrust;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Role;
use Entrust;
use App\Http\Requests;
use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::get();
        return view('entrust.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::whereId($id)->first();
        $roles = Role::lists('name', 'id');
        return view('entrust.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {

        $user = User::whereId($id)->first();

        $data = $request->all();
        $user->firstname =  $data['firstname'];
        $user->lastname =  $data['lastname'];
        $user->email =  $data['email'];


        if (($data['password'])) {
            if ($data['password']==$data['password_confirmation']) {
                $user->password = bcrypt($data['password']);
            }
            else {
                alert()->warning('...', 'Les mots de passe ne correspondent pas !')->autoclose(3500);
                return back()->withInput();
            }
        }

        $user->saveRoles($request->roles);

        $user->save();

            alert()->success('...', 'Utilisateur modifié !')->autoclose(3500);
            return redirect('/entrust/users/'.$request->id.'/edit');


    }

    public function create(){

        $user = new User;
        $roles = Role::lists('name', 'id');;
        return view('entrust.users.create', compact('user', 'roles'));

    }

       public function store(Request $request)
    {

        $user = new User;

        $data = $request->all();
        $user->firstname =  $data['firstname'];
        $user->lastname =  $data['lastname'];
        $user->email =  $data['email'];


        if (isset($data['password'])) {
            if ($data['password']==$data['password_confirmation']) {
                $user->password = bcrypt($data['password']);
            }
            else {
                alert()->warning('...', 'Les mots de passe ne correspondent pas !')->autoclose(3500);
                return back()->withInput();
            }
        }

        $user->save();

        $user = User::whereId($user->id)->first();

        $user->saveRoles($request->roles);

        $user->save();
            alert()->success('...', 'Utilisateur enregistré !')->autoclose(3500);
            return redirect('/entrust/users/'.$user->id.'/edit');


    }

     public function destroy($id){

        $user = User::whereId($id)->first();
        $user->delete();
        alert()->success('...', 'Utilisateur supprimé !')->autoclose(3500);
            return redirect('/entrust/users');
  }


}