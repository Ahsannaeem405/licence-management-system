<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerficationEmail;
use App\Models\User;
class VerifyController extends Controller
{
    public function verify()
    {
        return view('verify');
    }

    public function customer_profile()
    {
        return view('customer-profile');
    }

    public function store_customer_profile(Request $request)
    {
        $profile = User::where('id', Auth::user()->id)->first();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required','string'],
            'company_logo' => ['required'],
            'company_name' => ['required','string'],
        ]);
        if ($file = $request->hasfile('image'))
        {
            $file = $request->file('image');
            $fileName = uniqid() . $file->getClientOriginalName();
            $destinationPath = public_path().'/profiles-images/';
            $file->move($destinationPath, $fileName);
            $request->image = $fileName;
            $profile->image = $request->image;
        }
        if ($file = $request->hasfile('company_logo'))
        {
            $file = $request->file('company_logo');
            $fileName = uniqid() . $file->getClientOriginalName();
            $destinationPath = public_path().'/company-logo/';
            $file->move($destinationPath, $fileName);
            $request->company_logo = $fileName;
            $profile->company_logo = $request->company_logo;
        }
        $profile->name = $request->name;
        $profile->company_name = $request->company_name;
        $profile->address = $request->address;
        $profile->billing_address = $request->billing_address;
        $profile->billing_name = $request->billing_name;
        $profile->is_verified = 2;
        $profile->save();
        if($profile->package_id ==1)
        {
            return redirect()->route('stripe-payment')->with('success','No fee will be charged for first 3 months, can cancel the subscription at any time. An alert mail will be sent 5 days before the end of free trail.');
        }
        else
        {
            return redirect()->route('stripe-payment');
        }
        
    }

    public function verify_code(Request $request)
    {
        $code = Auth::user()->verification_code;
        $user = User::where('id',Auth::user()->id)->first();
        if($request->verification_code == $code)
        {
            if($user->is_verified == 0)
            {
                $user->is_verified = 1;
                $user->save();
            }
            return redirect()->route('customer-profile')->with('success','Email has been verified Successfully');
        }
        else
        {
            return back()->with('error','Invalid Verification Code');
        }  
    }

    public function resend_code(Request $request)
    {
        $user = User::where('id',$request->id)->first();
        $code = random_int(100000, 999999);
        $user->verification_code = $code;
        $user->save();
        $details = [
            'verification_code' => $code,
        ];
        Mail::to($user->email)->send(new VerficationEmail($details));
        return back()->with('success','Verification Code has been resended');
    }

    public function continue_free()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $user->is_verified=3;
        $user->save();
        Auth::logout();
        Session::flush();
        return redirect()->route('login')->with('success','successfully registerd continue to login.');
    }

    
}
