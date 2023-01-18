<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class LogoutController extends Controller
{
    public function logout()
    {
     Auth:: Logout();
     Session::flush();
     return redirect()->route('login');
    }
}
