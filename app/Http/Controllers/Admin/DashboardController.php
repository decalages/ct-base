<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Entrust;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        //dd('test');

    }
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
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

        public function profilstore()
    {

            $user = User::whereId(Auth::user()->id)->first();

            dd('à terminer');
            alert()->success('...', 'Profil modifié !')->autoclose(3500);
            
            return redirect('/membres/profil');


    }
}
