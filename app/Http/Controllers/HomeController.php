<?php

namespace App\Http\Controllers;

use App\Mail\AdminDemoMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use App\Models\Home;
use App\Models\Package;
use App\Models\PackageDetail;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function store(Request $request)
    {
        $admin = User::where('role', 'superadmin')->first();
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:homes'],
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
            'name' => $request->name,
            'email' =>  $request->email,
            'phone' => $request->phone,
            'company' =>  $request->company,
            'phone' => $request->phone,
            'role' => $request->role,
            'address' => $request->address,
        ];
        Mail::to($request->email)->send(new DemoMail($details));
        Mail::to($admin->email)->send(new AdminDemoMail($details));
        return back()->with('success', 'Registration Successfully');
    }

    public function stripe()
    {
        $package_id = User::where('id', Auth::user()->id)->pluck('package_id');
        $package = Package::where('id', $package_id)->first();
        return view('stripe', compact('package'));
    }

    public function welcome()
    {
        $packages = Package::all();
        return view('welcome', compact('packages'));
    }

    public function visits(Request $request)
    {
        $visit = new Visit();
        if(Visit::where('ip',$request->ip)->exists())
        {
            // $visit->update([
            //     'ip' => $request->ip,
            // ]);
        }
        else
        {
            $visit->create([
                'ip' => $request->ip,
            ]);
            Visit::where('ip',$request->ip)->increment('visits');
        }
    }
}
