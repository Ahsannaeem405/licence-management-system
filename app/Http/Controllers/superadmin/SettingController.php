<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use MyHelper;
class SettingController extends Controller
{
    public function setting()
    {
        $user = User::where('role', 'superadmin')->where('id', Auth::user()->id)->first();
        return view('superadmin.company.setting', compact('user'));
    }
    public function update_admin_profile(Request $request)
    {
        return MyHelper::update_profile($request);
    }
    public function update_admin_password(Request $request)
    {
        return MyHelper::update_password($request);
    }
}
