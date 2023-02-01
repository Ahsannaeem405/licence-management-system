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
use App\Models\Language;
use App\Models\Transaction;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SuperAdminController extends Controller
{
    //------------------------------------ Super-Admin Dashboard Start ------------------------------------//
    public function dashboard()
    {
        $total_customers = User::whereIn('role',['manager','tool-owner'])->count();
        $total_packages = Package::count();
        $total_license = License::count();
        $total_departments = Department::count();
        // $current_month = Transaction::whereMonth('created_at',\Carbon\Carbon::now())->sum('amount');
        // $last_month = Transaction::whereBetween('created_at',[\Carbon\Carbon::now()->subMonth()->startOfMonth(), \Carbon\Carbon::now()->subMonth()->endOfMonth()])->sum('amount');
        // $current_date = Transaction::whereMonth('created_at',\Carbon\Carbon::now())->pluck('created_at');
        $data = [
            'total_customers',
            'total_packages',
            'total_license',
            'total_departments'
        ];
        return view('superadmin.dashboard.dashboard',compact($data));
    }
    //------------------------------------ Super-Admin Dashboard Start ------------------------------------//

    //------------------------------------ Super-Admin Subscription Start ------------------------------------//
    public function subscription()
    {
        $subcription = User::where('role','customer')->where('active','1')->whereNotNull('package_id')
        ->with('package')
        ->get();
        return view('superadmin.subscriptions.subcription',compact('subcription'));
    }
    //------------------------------------ Super-Admin Subscription End ------------------------------------//

    //------------------------------------ Super-Admin Customer Start ------------------------------------//
    public function customer()
    {

        $customers = User::where('role','customer')->get();
        return view('superadmin.customers.customers', compact('customers'));
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
        $packages = Package::all();
        return view('superadmin.packages.Package', compact('packages'));
    }
    public function add_package()
    {
        return view('superadmin.packages.add-package');
    }

    public function admin_store_package(Request $request)
    {
        $this->validate($request,[
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
        return redirect()->route('superadmin-package')->with('success','Package Updated Successfully');
    }


    public function admin_delete_package($id)
    {
        $pack = Package::find($id);
        $pack->delete();
        return redirect()->route('superadmin-package')->with('success', 'Package Deleted Successfully');
    }
    //------------------------------------ Super-Admin Package End ------------------------------------//

    //------------------------------------ Super-Admin Service Start ------------------------------------//
    public function service()
    {
        $services = Service::orderBy('id','desc')->get();
        return view('superadmin.service.service',compact('services'));
    }

    public function add_service()
    {
        return view('superadmin.service.add-service');
    }

    public function store_service(Request $request)
    {
        $this->validate($request,[
            'name' => ['required'],
        ]);
        $service = new Service();
        $service->create([
            'name' => $request->name,
        ]);
        return redirect()->route('superadmin-service')->with('success','Service added successfully');
    }

    public function edit_service($id)
    {
        $service = Service::where('id',$id)->first();
        if($service)
        {
            return view('superadmin.service.edit-service',compact('service'));
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
    }

    public function update_service(Request $request)
    {
        $service = Service::where('id',$request->id)->first();
        if($service)
        {
            $service->name = $request->name;
            $service->save();
            return redirect()->route('superadmin-service')->with('success','Service updated successfully');
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
    }

    public function delete_service($id)
    {
        $service = Service::where('id',$id)->first();
        if($service)
        {
            $service->delete();
            return back()->with('success','Service deleted successfully');
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
    }

    //------------------------------------ Super-Admin Service Start ------------------------------------//

    //------------------------------------ Super-Admin Transaction Start ------------------------------------//
    public function transaction()
    {
        $transactions = Transaction::all();
        return view('superadmin.transactions.transaction' ,compact('transactions'));
    }
    //------------------------------------ Super-Admin Transaction End ------------------------------------//

    //------------------------------------ Super-Admin License Start ------------------------------------//

    public function license()
    {
        $users = User::where('role','customer')->get();
        
        return view('superadmin.license.license',compact('users'));
    }

    public function departments($id)
    {
        $departments = Department::where('user_id','=',$id)->get();
        return view('superadmin.license.view-departments',compact('departments'));
    }
    
    public function license_view($id)
    {
        $license = license::where('department_id',$id)->get();
        return view('superadmin.license.view-license',compact('license'));
    }

    public function delete_license($id)
    {
        $license = license::find($id);
        
        $license->delete();
        return back()->with('success', 'License Deleted Successfully');
    }
    //------------------------------------ Super-Admin License End ------------------------------------//

    //------------------------------------ Super-Admin Multi Language Start ------------------------------------//
    public function lang()
    {
        $languages = Language::all();
        return view('superadmin.languages.lang',compact('languages'));
    }

    public function add_language(Request $request)
    {
        $this->validate($request,[
            'language' => ['required','string'],
            'country' => ['required','string'],
        ]);
        $language = new Language();
        $language->create([
            'language' => $request->language,
            'country' => $request->country,
        ]);
        return back()->with('success','Language added successfully');
    }

    public function edit_language($id)
    {
        $language = Language::where('id',$id)->first();
        return view('superadmin.languages.edit-language',compact('language'));
    }

    public function update_language(Request $request)
    {
        $this->validate($request,[
            'language' => ['required','string'],
            'country' => ['required','string'],
        ]);
        $language = Language::where('id',$request->id)->first();
        if($language)
        {
            $language->country = $request->country;
            $language->language = $request->language;
            $language->save();
            return redirect()->route('superadmin-multi-lang')->with('success','Language updated successfully');
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
    }

    public function delete_language($id)
    {
        $language = Language::where('id',$id)->first();
        if($language)
        {
            $language->delete();
            return back()->with('success','Language deleted successfully');
        }
        else
        {
            return back()->With('error','Something went wrong');
        }
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
