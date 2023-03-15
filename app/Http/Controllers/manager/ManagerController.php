<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\License;
use App\Models\Department;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerMail;
use App\Models\Package;
use PDF;
use MyHelper;

class ManagerController extends Controller
{
    //------------------------------------ Manager-Dashboard Start ------------------------------------//
    public function dashboard()
    {
        $total_license = License::where('reffer_to', Auth::user()->id)->count();
        return view('manager.dashboard.dashboard', compact('total_license'));
    }
    //------------------------------------ Manager-Dashboard End ------------------------------------//

    //------------------------------------ Manager-Info Start ------------------------------------//
    public function companyinfo()
    {

        $company_id = Department::where('id', Auth::user()->department_id)->value('user_id');
        $company = User::where('id', $company_id)->first();
        $total_department = Department::where('user_id', $company_id)->count();
        $total_license = License::where('department_id', $company_id)->count();
        $data = [
            'company',
            'total_department',
            'total_license',
        ];
        return view('manager.company.company-info', compact($data));
    }
    //------------------------------------ Manager-Info End ------------------------------------//

    //------------------------------------ Manager-Management Start ------------------------------------//
    public function management()
    {
        $customer = User::find(auth()->user()->company_id);
        $package = Package::find($customer->package_id);
        $managers_allowed = User::where('add_by',auth()->user()->customer_id)->count();
        $users = User::whereIn('role', ['manager', 'owner'])->where('company_id', auth()->user()->company_id)->get();
        return view('manager.management.management', compact('users','package','managers_allowed'));
    }

    public function add_management()
    {
        $department_id = User::where('id', Auth::user()->id)->value('department_id');
        $department = Department::where('id', $department_id)->first();
        return view('manager.management.add-management', compact('department'));
    }
    public function store_tool_owner(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required'],
            'phone' => ['required'],
            'role' => ['required'],
            'department' => ['required'],

        ]);

        $owner = new User();
        $owner->create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' =>  Hash::make($request->password),
            'address' =>  $request->address,
            'phone' => $request->phone,
            'role' => $request->role,
            'department_id' => $request->department,
            'add_by' => Auth::user()->id,
            'company_id' => Auth::user()->company_id,
        ]);
        $details = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ];
        Mail::to($request->email)->send(new CustomerMail($details));
        return redirect()->route('manager-management')->with('success', '' . $request->role . ' added successfully mail sent');
    }

    public function edit_tool_owner(Request $request, $id)
    {
        $owner = User::find($id);
        $departments = Department::all();
        return view('manager.management.edit-management', compact('owner', 'departments'));
    }

    public function update_tool_owner(Request $request)
    {
        $owner = User::find($request->id);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $owner->id . ''],
            'role' => ['required'],
            'department' => ['required'],
        ]);
        if ($owner) {
            $owner->name = $request->name;
            $owner->email = $request->email;
            if ($request->password) {
                $owner->password = Hash::make($request->password);
            }
            $owner->address = $request->address;
            $owner->phone = $request->phone;
            $owner->role = $request->role;
            $owner->department_id = $request->department;
            $owner->save();
            return redirect()->route('manager-management')->with('success', 'Tool Owner updated successfully');
        } else {
            return back()->with('error', 'User not found!');
        }
    }

    public function delete_tool_owner($id)
    {
        $owner = User::find($id);
        $license = License::where('reffer_to', $owner->id)->first();

        if (!$license) {
            $owner->delete();
            if ($owner->role == 'owner') {
                return redirect()->route('manager-management')->with('success', 'Tool Owner deleted successfully');
            } else {
                return redirect()->route('manager-management')->with('success', 'Manager deleted successfully');
            }
        } else {
            return back()->with('error', 'Delete License of this manager first');
        }


    }
    //------------------------------------ Manager-Management End ------------------------------------//

    //------------------------------------ Manager-License Start ------------------------------------//
    public function license()
    {
        $user = User::find(auth()->user()->company_id);
        $package = Package::find($user->package_id);
        $licenses = License::where('reffer_to', Auth::user()->id)->get();
        $license_added = License::where('customer_id', auth()->user()->company_id)->count();
        return view('manager.license.license', compact('licenses', 'license_added', 'package'));
    }

    public function export_manager_license_list(Request $request)
    {
        $licenses = License::whereIn('id', explode(',', $request->id))->get();
        $pdf = PDF::loadView('pdf.manager-license-list', compact('licenses'));
        return $pdf->download('ManLicExportReport.pdf');
    }

    public function share_manager_license_list(Request $request)
    {
        $licenses = License::whereIn('id', explode(',', $request->id))->get();
        $pdf = PDF::loadView('emails.manager-license-list', compact('licenses'));
        Mail::send([], [], function ($message) use ($pdf, $request) {
            $message->to($request->email)
                ->subject('Manager List PDF')
                ->attachData($pdf->output(), 'ManLicExportReport.pdf', [
                    'mime' => 'application/pdf',
                ]);
        });
        return back()->with('success', 'Manager List Sent Successfully');
    }

    public function add_license()
    {
        $department_id = User::where('id', Auth::user()->id)->value('department_id');
        $department = Department::where('id', $department_id)->first();
        // $users  = User::where('add_by',Auth::user()->id)->get();
        // $services = Service::all();
        return view('manager.license.add-license', compact('department'));
    }

    public function store_license(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'purchase_date' => ['required'],
            'reffer' => ['required'],
            'department' => ['required'],
            'key' => ['required'],
            'additional_info' => ['string', 'max:2000'],
        ]);
        $license = new License;
        if ($file = $request->hasfile('attachment')) {
            $file = $request->file('attachment');
            $fileName = uniqid() . $file->getClientOriginalName();
            $destinationPath = public_path() . '/license-attachments/';
            $file->move($destinationPath, $fileName);
            $request->attachment = $fileName;
            $license->attachment = $request->attachment;
        }
        $license->create([
            'title' => $request->title,
            'customer_id' => Auth::user()->company_id,
            'description' => $request->description,
            'price' => $request->price,
            'purchase_date' => $request->purchase_date,
            'additional_info' => $request->additional_info,
            'license_owner' => $request->license_owner,
            'renew_date' => $request->renew_date,
            'renew_alert' => $request->renew_alert ? 1 : 0,
            'expiry_alert' => $request->expiry_alert ? 1 : 0,
            'reffer_to' =>  auth()->user()->id,
            'department_id' =>  $request->department,
            'date_of_issue' => $request->issue,
            'date_of_expiry' => $request->expiry,
            'key' =>  $request->key,
            'attachment' => $request->attachment,
        ]);
        return redirect()->route('manager-license')->with('success', 'License added successfully');
    }

    public function edit_license(Request $request, $id)
    {
        $license = License::find($id);
        $department = Department::where('id', $license->department_id)->first();
        $services = Service::all();
        $data = [
            'license',
            'department',
            'services',
        ];
        return view('manager.license.edit-license', compact($data));
    }

    public function update_license(Request $request)
    {
        $license = License::find($request->id);
        $this->validate($request, [
            'title' => ['required'],
            'issue' => ['required'],
            'expiry' => ['required'],
            'department' => ['required'],
            'key' => ['required'],
        ]);
        if ($file = $request->hasfile('attachment')) {
            $file = $request->file('attachment');
            $fileName = uniqid() . $file->getClientOriginalName();
            $destinationPath = public_path() . '/license-attachments/';
            $file->move($destinationPath, $fileName);
            $license->attachment = $fileName;

        }


        if ($license) {
            $license->title = $request->title;
            $license->reffer_to = $request->reffer;


            $license->purchase_date = $request->purchase_date;
            $license->additional_info = $request->additional_info;
            $license->license_owner = $request->license_owner;
            $license->renew_date = $request->renew_date;
            $license->renew_alert = $request->renew_alert ? 1 : 0;
            $license->expiry_alert = $request->expiry_alert ? 1 : 0;

            $license->date_of_issue = $request->issue;
            $license->date_of_expiry = $request->expiry;
            $license->department_id = $request->department;
            $license->description = $request->description;
            $license->price = $request->price;


            $license->key = $request->key;
            $license->save();
            return redirect()->route('manager-license')->with('success', 'License updated successfully');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }

    public function delete_license($id)
    {
        $license = License::find($id);
        if ($license) {
            $license->delete();
            return redirect()->route('manager-license')->with('success', 'License Deleted Successfully');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }
    //------------------------------------ Manager-License End ------------------------------------//

    //------------------------------------ Manager-Setting Start ------------------------------------//
    public function setting()
    {
        $user = User::whereIn('role', ['manager', 'owner'])->where('id', Auth::user()->id)->first();
        return view('manager.settings.setting', compact('user'));
    }

    public function update_manager_profile(Request $request)
    {
        return MyHelper::update_profile($request);
    }

    public function update_manager_password(Request $request)
    {
        return MyHelper::update_password($request);
    }
    //------------------------------------ Manager-Setting End ------------------------------------//

}
