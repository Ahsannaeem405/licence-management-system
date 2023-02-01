<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\License;
use App\Models\Package;
use App\Services\PaymentDeduct;

use App\Models\User;
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
        $departments = Department::where('user_id',Auth::user()->id)->get();
        return view('customer.department.department',compact('departments'));
    }

    public function add_department()
    {

        return view('customer.department.add-department');
    }
    //------------------------------------ Customer-Departments End ------------------------------------//

    //------------------------------------ Customer-License Start ------------------------------------//
    public function license()
    {
        $license = License::all();
        return view('customer.license.license',compact('license'));
    }

    public function add_license()
    {
        $departments = Department::all();
        return view('customer.license.add-license',compact('departments'));
    }

    public function store_license(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'service' => ['required'],
            'key' => ['required'],
            'issue_date' => ['required'],
            'expiry_date' => ['required'],
        ]);
        $license = new License;
        $license->create([
            'title' => $request->title,
            'service' =>  $request->service,
            'date_of_issue' => $request->issue,
            'date_of_expiry' => $request->expiry,
            'department_id' =>  $request->department,
            'key' =>  $request->key,
        ]);
        return back()->with('success', 'Customer License save successfully');
    }

    public function customer_edit_license(Request $request,$id)
    {

        $license = License::find($id);

        return view('customer.license.edit-license', compact('license'));
    }

    
    // public function admin_update_package(Request $request)
    // {


    //     $license = License::find($request->id);
    //     $this->validate($request, [
              
    //         'title' => $request->title,
    //         'service' =>  $request->entity,
    //         'issue_date' => $request->issue,
    //         'expiry_date' => $request->expiry,
    //         'department' =>  $request->department,
    //         'key' =>  $request->key,
    //     ]);

    //     $license->title = $request->title;
    //     $license->service = $request->service;
    //     $license->issue_date = $request->issue;
    //     $license->expiry_date = $request->expiry;
    //     $license->department = $request->department;
    //     $license->key = $request->key;
    //     $license->save();
    //     return redirect()->route('customer-license')->with('success', ' Customer License Updated Successfully');
    // }
    public function customer_license_delete($id)
    {
        $pack = License::find($id);
        $pack->delete();
        return redirect()->route('customer-license')->with('success', 'Customer License Deleted Successfully');
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
