<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\companyMail;
use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function store(Request $request)
    {
        $admin = User::where('role','superadmin')->first();
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required',
            'company' => 'required',
            'role' => 'required',
            'address' => 'required',
            'mode' => 'required',

        ]);
        $client = new Home();
        $client->create([
            'name' => $request->name,
            'email' =>  $request->email,
            'phone' => $request->phone,
            'company' =>  $request->company,
            'phone' => $request->phone,
            'role' => $request->role,
            'address' => $request->address,
            'mode' => $request->mode,
        ]);
        $details = [
            'email' => $request->email,
        ];
        Mail::to($request->email,$admin->email)->send(new companyMail($details));
        return back()->with('success', 'Registration Successfully');
    }
    public function mail()
    {
        return view('mail');
    }

    public function stripe()
    {
        return view('stripe');
    }
}
