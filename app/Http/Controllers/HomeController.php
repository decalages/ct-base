<?php
namespace App\Http\Controllers;


use Auth;
use Entrust;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function __construct()
    {
        $this->middleware('web');
    }



    public function index()
    {
        if (Auth::user()) {
            return redirect('/membres/dashboard');
        }
        else {
            return redirect('/login');
        }

    }



}
