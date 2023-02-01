<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\License;
use App\Models\Package;
use App\Services\PaymentDeduct;
use App\Models\User;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerMail;
use MyHelper;
class CustomerController extends Controller
{
    //------------------------------------ Customer-Dashboard Start ------------------------------------//
    public function dashboard()
    {
        $total_department = Department::where('user_id',Auth::user()->id)->count();
        $total_license = License::where('customer_id',Auth::user()->id)->count();

        return view('customer.dashboard.dashboard');
    }
    //------------------------------------ Customer-Dashboard End ------------------------------------//

    //------------------------------------ Customer-Subscription Start ------------------------------------//
    public function subscripton()
    {
        $packages=Package::all();
        
        return view('customer.subscription.subcription' ,compact('packages'));
    }
    //------------------------------------ Customer-Subscription End ------------------------------------//

    //------------------------------------ Customer-Departments Start ------------------------------------//
    public function department()
    {
        $departments = Department::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('customer.department.department',compact('departments'));
    }

    public function add_department()
    {
        return view('customer.department.add-department');
    }

    public function store_department(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','string'],
            'description' => ['required','string'],
        ]);
        $department = new Department();
        $department->create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('customer-department')->with('success','Department added successfully');
    }

    public function edit_department($id)
    {
        $department = Department::where('id',$id)->first();
        if($department)
        {
            return view('customer.department.edit-department',compact('department'));
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
    }

    public function update_department(Request $request)
    {
        $department = Department::where('id',$request->id)->first();
        if($department)
        {
            $department->name = $request->name;
            $department->description = $request->description;
            $department->save();
            return redirect()->route('customer-department')->with('success','Department updated successfully');
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
    }

    public function delete_department($id)
    {
        $department = Department::where('id',$id)->first();
        if($department)
        {
            $department->delete();
            return back()->with('success','Department deleted successfully');
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
    }
    //------------------------------------ Customer-Departments End ------------------------------------//

    //------------------------------------ Customer-License Start ------------------------------------//
    public function license()
    {
        $licenses = License::all();
        return view('customer.license.license',compact('licenses'));
    }

    public function add_license()
    {
        $departments = Department::all();
        $services = Service::all();
        return view('customer.license.add-license',compact('departments','services'));
    }

    public function store_license(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'service' => ['required'],
            'department' => ['required'],
            'key' => ['required'],
            'issue' => ['required'],
            'expiry' => ['required'],
        ]);
        $license = new License;
        $license->create([
            'title' => $request->title,
            'customer_id' => Auth::user()->id,
            'service_id' =>  $request->service,
            'department_id' =>  $request->department,
            'date_of_issue' => $request->issue,
            'date_of_expiry' => $request->expiry,
            'key' =>  $request->key,
        ]);
        return redirect()->route('customer-license')->with('success', 'Customer License save successfully');
    }

    public function edit_license(Request $request,$id)
    {
        $license = License::find($id);
        $departments = Department::all();
        $services = Service::all();
        $data = [
            'license',
            'departments',
            'services',
        ];
        return view('customer.license.edit-license', compact($data));
    }

    public function update_license(Request $request)
    {
        $license = License::find($request->id);
        $this->validate($request, [
              
            'title' => ['required'],
            'service' =>  ['required'],
            'issue' => ['required'],
            'expiry' => ['required'],
            'department' => ['required'],
            'key' => ['required'],
        ]);
        if($license)
        {
            $license->title = $request->title;
            $license->service_id = $request->service;
            $license->date_of_issue = $request->issue;
            $license->date_of_expiry = $request->expiry;
            $license->department_id = $request->department;
            $license->key = $request->key;
            $license->save();
            return redirect()->route('customer-license')->with('success', 'License updated successfully');
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
        
    }

    public function delete_license($id)
    {
        $license = License::find($id);
        if($license)
        {
            $license->delete();
            return redirect()->route('customer-license')->with('success', 'License Deleted Successfully');
        }
        else
        {
            return back()->with('error','Something went wrong');
        }
        
    }
    //------------------------------------Customer-License End ------------------------------------//

    //------------------------------------ Customer-Managment Start ------------------------------------//
    public function management()
    {
        $owners = User::where('role','manager')->get();
        return view('customer.management.management',compact('owners'));
    }

    public function add_management()
    {
        return view('customer.management.add-management');
    }

    public function store_tool_owner(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => 'required',
            'phone' => 'required',

        ]);

        $owner = new User();
        $owner->create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' =>  Hash::make($request->password),
            'address' =>  $request->address,
            'phone' => $request->phone,
            'role' => 'manager',
        ]);
        $details = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        Mail::to($request->email)->send(new CustomerMail($details));
        return redirect()->route('customer-management')->with('success', 'Tool Owner Added Successfully');
    }

    public function edit_tool_owner(Request $request, $id)
    {
        $owner = User::find($id);
        return view('customer.management.edit-management', compact('owner'));
    }

    public function update_tool_owner(Request $request)
    {
        $owner = User::find($request->id);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $owner->id . ''],
        ]);
        if ($owner) 
        {
            $owner->name = $request->name;
            $owner->email = $request->email;
            if ($request->password) 
            {
                $owner->password = Hash::make($request->password);
            }
            $owner->address = $request->address;
            $owner->phone = $request->phone;
            $owner->save();
            return redirect()->route('customer-management')->with('success', 'Tool Owner updated successfully');
        } 
        else 
        {
            return back()->with('error', 'User not found!');
        }
    }

    public function delete_tool_owner($id)
    {
        $owner = User::find($id);
        $owner->delete();
        return redirect()->route('customer-management')->with('success', 'Tool Owner deleted successfully');
    }
    //------------------------------------ Customer-Management End ------------------------------------//

    //------------------------------------ Customer-Settings Start ------------------------------------//
    public function setting()
    {
        $user = User::where('role','customer')->where('id',Auth::user()->id)->first();
        return view('customer.settings.setting',compact('user'));
    }

    public function update_customer_profile(Request $request)
    {
        return MyHelper::update_profile($request);
    }

    public function update_customer_password(Request $request)
    {
        return MyHelper::update_password($request);
    }
    //------------------------------------ Customer-Settings End ------------------------------------//
}
