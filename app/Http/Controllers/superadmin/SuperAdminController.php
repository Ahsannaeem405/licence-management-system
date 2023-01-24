<?php

namespace App\Http\Controllers\superadmin;
use MyHelper;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\mail\CustomerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SuperAdminController extends Controller
{
    //------------------------------------ Super-Admin Dashboard Start ------------------------------------//
    public function dashboard()
    {
        return view('superadmin.dashboard.dashboard');
    }
    //------------------------------------ Super-Admin Dashboard Start ------------------------------------//

    //------------------------------------ Super-Admin Subscription Start ------------------------------------//
    public function subscription()
    {
        return view('superadmin.subscriptions.subcription');
    }
    //------------------------------------ Super-Admin Subscription End ------------------------------------//

    //------------------------------------ Super-Admin Customer Start ------------------------------------//
    public function customer()
    {

        $admin = User::where('role', 'customer')->get();
        return view('superadmin.customers.customers', compact('admin'));
    }

    public function add_customer()
    {
        return view('superadmin.customers.add-customers');
    }

    public function store_customer(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => 'required',
            'phone' => 'required',

        ]);

        $admin = new User();
        $admin->create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' =>  Hash::make($request->password),
            'address' =>  $request->address,
            'phone' => $request->phone,
            'role' => 'customer',
        ]);
        $details = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        Mail::to($request->email)->send(new CustomerMail($details));
        return redirect()->route('superadmin-customers')->with('success', 'Customer Added Successfully');
    }

    public function edit_customer(Request $request, $id)
    {
        $admin = User::find($id);
        return view('superadmin.customers.edit-customer', compact('admin'));
    }

    public function update_customer(Request $request)
    {
        $customer = User::find($request->id);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $customer->id . ''],
            'address' => 'required',
            'phone' => 'required',
        ]);
        if ($customer) 
        {
            $customer->name = $request->name;
            $customer->email = $request->email;
            if ($request->password) 
            {
                $customer->password = Hash::make($request->password);
            }
            $customer->address = $request->address;
            $customer->phone = $request->phone;
            $customer->save();
            return redirect()->route('superadmin-customers')->with('success', 'Customer Updated Successfully');
        } 
        else 
        {
            return back()->with('error', 'User not found!');
        }
    }

    public function delete_customer($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect()->route('superadmin-customers')->with('success', 'Customer Deleted Successfully');
    }
    //------------------------------------ Super-Admin Customer End ------------------------------------//

    //------------------------------------ Super-Admin Package Start ------------------------------------//
    public function Package()
    {
        return view('superadmin.packages.Package');
    }

    public function add_package()
    {
        return view('superadmin.packages.add-package');
    }
    //------------------------------------ Super-Admin Package End ------------------------------------//

    //------------------------------------ Super-Admin Transaction Start ------------------------------------//
    public function transaction()
    {
        return view('superadmin.transactions.transaction');
    }
    //------------------------------------ Super-Admin Transaction End ------------------------------------//

    //------------------------------------ Super-Admin License Start ------------------------------------//

    public function license()
    {
        return view('superadmin.license.license');
    }

    public function license_view()
    {
        return view('superadmin.license.view-license');
    }
    //------------------------------------ Super-Admin License End ------------------------------------//

    //------------------------------------ Super-Admin Multi Language Start ------------------------------------//
    public function lang()
    {
        return view('superadmin.languages.lang');
    }
    //------------------------------------ Super-Admin Multi Language End ------------------------------------//

    //------------------------------------ Super-Admin Analytics Start ------------------------------------//
    public function analytics()
    {
        return view('superadmin.analytics.analytics');
    }
    //------------------------------------ Super-Admin Analytics End ------------------------------------//

    //------------------------------------ Super-Admin Account Setting Start ------------------------------------//
    public function setting()
    {
        $user = User::where('role', 'superadmin')->where('id', Auth::user()->id)->first();
        return view('superadmin.settings.setting', compact('user'));
    }
    public function admin_update_profile(Request $request)
    {
       return MyHelper::update_profile($request);
    }

    public function admin_update_password(Request $request)
    {
       return MyHelper::update_password($request);
    }
    //------------------------------------ Super-Admin Account Setting End ------------------------------------//


}
