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
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    //------------------------------------ Customer-Dashboard Start ------------------------------------//
    public function dashboard()
    {
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
        return view('customer.management.management');
    }

    public function addmanagement()
    {
        return view('customer.management.add-management');
    }
    //------------------------------------ Customer-Management End ------------------------------------//

    //------------------------------------ Customer-Settings Start ------------------------------------//
    public function setting()
    {
        return view('customer.settings.setting');
    }
    //------------------------------------ Customer-Settings End ------------------------------------//
}
