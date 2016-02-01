<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Entrust;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Requests\Admin\ImagesRequest;
use App\User;
use Illuminate\Http\Request;
use Image;
use File;

class MembreController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function profil()
    {
        if (Auth::user()) {
            $user = User::whereId(Auth::user()->id)->first();
            return view('user.profil', compact('user'));
        }
        else {
            return redirect('/login');
        }

    }

    public function update(Request $request)
    {

        $data = $request->all();

        $user = User::whereId(Auth::user()->id)->first();
        
        if ($user->email != $data['email']) {
            $checkemail = User::where('email', '=', $data['email'])->first();
            if (!$checkemail) {
                $user->email =  $data['email'];
            }
            else {
                alert()->warning(' ', 'Cet adresse email est déjà utilisée !')->autoclose(3500);
                return back()->withInput();
            }
        }

        $user->firstname =  $data['firstname'];
        $user->lastname =  $data['lastname'];

        if (($data['password'])) {
            if ($data['password']==$data['password_confirmation']) {
                $user->password = bcrypt($data['password']);
            }
            else {
                alert()->warning(' ', 'Les mots de passe ne correspondent pas !')->autoclose(3500);
                return back()->withInput();
            }
        }
       
        $user->save();

        alert()->success(' ', 'Profil modifié !')->autoclose(3500);
        return redirect('/membres/profil/');

    }

    
    public function postimage(Request $request)
    {

        $user = User::whereId(Auth::user()->id)->first();
        $path = public_path() . '/images/profiles/';
        $currentimage = $path.$user->avatar;
        if ($user->avatar != 'default.png') {
            \File::delete($currentimage);
        }
        
        if(Input::hasFile('file'))
        {

            $this->validate($request, [
                'file' => ['required', 'image']
            ]);

            $file = Input::file('file');
            $filename = Auth::user()->id.'_'.time().'.'.Input::file('file')->guessClientExtension();
            
            $img = Image::make($file);  
            
            $img->fit(300, 300, function ($constraint) {$constraint->aspectRatio(); })
                ->save($path.$filename);

            $user->avatar =  $filename;
            $user->save();

            return 'ok -'.$filename;

        }
        else {
            $user->avatar =  'default.png';
            $user->save();

            return redirect('/membres/profil/');
        }
        
    }
    

}
