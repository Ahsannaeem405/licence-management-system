<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MyHelper
{
    public static function update_profile(Request $request)
    {
    
        $user = User::where('id', Auth::user()->id)->first();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id . ''],
        ]);
        if ($file = $request->hasfile('image'))
         {
            $file = $request->file('image');
            $fileName = uniqid() . $file->getClientOriginalName();
            $destinationPath = public_path().'/profiles-images/';
            $file->move($destinationPath, $fileName);
            $request->image = $fileName;
            $user->image = $request->image;
        }
      
       

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('superadmin-setting')->with('success', 'AdminPorfile Updated Successfully');
    }


    public static function update_password(Request $request)
    {
        if(empty($request->old_password) || empty($request->new_password))
        {
            return back()->with("error", "Old Password and New Password fields are Required");
        }
        if($request->new_password != $request->new_password_confirmation)
        {
            return back()->with("error", "New Password Doesn't match with Confirm Password");
        }
        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("success", "Password changed successfully!");

}
}