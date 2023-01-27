<?php

namespace App\Http\Controllers\superadmin;
 
use MyHelper;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\mail\CustomerMail;
use App\Models\Department;
use App\Models\Package;
use App\Models\License;
use App\Models\Transaction;
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
        $subcription = User::where('role','customer')->where('active', '1')->whereNotNull('package_id')
        ->with('package')
        ->get();
 
    
       
        return view('superadmin.subscriptions.subcription',compact('subcription'));
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
        if ($customer) {
            $customer->name = $request->name;
            $customer->email = $request->email;
            if ($request->password) {
                $customer->password = Hash::make($request->password);
            }
            $customer->address = $request->address;
            $customer->phone = $request->phone;
            $customer->save();
            return redirect()->route('superadmin-customers')->with('success', 'Customer Updated Successfully');
        } else {
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
        $pack = Package::all();
        return view('superadmin.packages.Package', compact('pack'));
    }
    public function add_package()
    {
        return view('superadmin.packages.add-package');
    }

    public function admin_store_package(Request $request)
    {
 
 
          $this->validate($request, [
                    'package' => 'required',
                    'entity' => 'required',
                    'price' => 'required',
                    'description' =>'required',

                ]);


        $pack = new Package();
       
        $pack->create([
            
            'package' => $request->package,
            'entity' =>  $request->entity,
            'price' =>  $request->price,
            'description' => $request->description,

        ]);
 
        return back()->with('success', 'Admin Package save successfully');
    }

    public function admin_edit_package(Request $request, $id)
    {

        $pack = Package::find($id);

        return view('superadmin.packages.edit-package', compact('pack'));
    }

    public function admin_update_package(Request $request)
    {


        $pack = Package::find($request->id);
        $this->validate($request, [
            'package' => 'required',
            'entity' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $pack->package = $request->package;
        $pack->entity = $request->entity;
        $pack->price = $request->price;
        $pack->description = $request->description;
        $pack->save();
        return redirect()->route('superadmin-package')->with('success', ' Admin Package Updated Successfully');
    }


    public function admin_delete_package($id)
    {
        $pack = Package::find($id);
        $pack->delete();
        return redirect()->route('superadmin-package')->with('success', 'Package Deleted Successfully');
    }


    //------------------------------------ Super-Admin Package End ------------------------------------//

    //------------------------------------ Super-Admin Transaction Start ------------------------------------//
    public function transaction()
    {
        $transaction = Transaction::all();
        return view('superadmin.transactions.transaction' ,compact('transaction'));
    }
    //------------------------------------ Super-Admin Transaction End ------------------------------------//

    //------------------------------------ Super-Admin License Start ------------------------------------//

    public function license()
    {
        $department = Department::all();
        
        return view('superadmin.license.license',compact('department'));
    }

    public function license_view($id)
    {
        
        $license = license::where('id',$id)->get();
       
        return view('superadmin.license.view-license',compact('license'));
    }

    public function delete_license($id)
    {
        // $license = license::where('id',$id)->first();
        $license = license::find($id);
        
        $license->delete();
          return back()->with('success', 'License Deleted Successfully');
        // return redirect()->route('superadmin.license.view-license')->with('success', 'License Deleted Successfully');
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
