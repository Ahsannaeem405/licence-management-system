<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function setting()
    {
        $user = User::where('role', 'superadmin')->where('id', Auth::user()->id)->first();
        return view('superadmin.company.setting', compact('user'));
    }
    public function updateadmin(Request $request)
    {
        $user = User::find($request->id);

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id . ''],
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
       
        $user->save();

        return redirect()->route('superadmin-setting')->with('success', 'AdminPorfile Updated Successfully');
    }
     
}
