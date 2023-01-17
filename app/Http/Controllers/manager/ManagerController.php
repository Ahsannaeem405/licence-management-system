<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(){
        return view('manager.dashboard');
    }

    public function companyinfo(){
        return view('manager.companyinfo');
    }

    public function license(){
        return view('manager.license');
    }

    
    public function addlicense(){
        return view('manager.addlicense');
    }

    public function setting(){
        return view('manager.setting');
    }

    
}
