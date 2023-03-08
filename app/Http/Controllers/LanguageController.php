<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LanguageController extends Controller
{
     //----------------------------------------Localization-------------------------------------------------------//

     public function switchLang($lang)
     {
         if(Auth::check())
        {
            $user = User::where('id',Auth::user()->id)->first();
            if($user)
            {
                $user->language = $lang;
                $user->save();
            }
        }
        
        if (array_key_exists($lang, Config::get('languages'))) 
        {
            Session::put('applocale', $lang);
        }

        return Redirect::back()->with('success','Language switched successfully');
     }
 
     //-----------------------------------------End Localization-------------------------------------------------
}
