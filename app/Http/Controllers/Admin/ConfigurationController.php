<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Entrust;
use File;
use Image;
use App\Role;

class ConfigurationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //dd('test');

    }

    public function index(){

       $config = File::getRequire(base_path().'/config/config.php');

        return view('configuration.index', compact('config'));
    }

    
    public function configstore(Request $request){
        if(!Entrust::hasRole('admin'))
            return redirect('/')->withErrors('Erreur');

        $config = File::getRequire(base_path().'/config/config.php');

        $input = $request->all();

        if ($request->file('logo')) {
            $logo = Image::make($request->file('logo')->getRealPath());
            $extension = '.'.$request->file('logo')->guessClientExtension();
            $path = '/images/';
            $imagename = 'logo';
            //dd($path);
            File::exists(public_path().$path) or File::makeDirectory(public_path().$path, $mode = 0777, true, true);

            $logo->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path().$path.$imagename.$extension)
            ->resize(null, 50, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path().$path.'tn-'.$imagename.$extension);


            $input['logo'] = $imagename.$extension;
           //$user->logo      =   $imagename.$extension;
        }
        //dd($input);
        $config_type = $request->input('config_type');
        foreach($input as $key => $value){
            if($key != '_token' && $key != 'config_type')
            $config[$key] = $value;
        }

        $filename = base_path().'/config/config.php';
        File::put($filename,var_export($config, true));
        File::prepend($filename,'<?php return ');
        File::append($filename, ';');

        return redirect('/admin/configuration/saving');
    }

    public function saving(){

        alert()->success('...', 'Configuration modifiée !')->autoclose(3500);
            return view('configuration.saving');
    }

}
