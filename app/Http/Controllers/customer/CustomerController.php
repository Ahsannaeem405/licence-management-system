<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\License;
use App\Models\Package;
use App\Services\PaymentDeduct;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerMail;
use App\Mail\SendDepartmentList;
use Illuminate\Mail\Message;
use App\Mail\RenewAlert;
use MyHelper;
use PDF;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    //------------------------------------ Customer-Dashboard Start ------------------------------------//
    public function dashboard()
    {
        $total_department = Department::where('user_id', Auth::user()->id)->count();
        $total_managers = User::where('add_by', Auth::user()->id)->count();
        $total_license = License::where('customer_id', Auth::user()->id)->count();
        $total_subscription = Transaction::where('user_id', Auth::user()->id)->count();
        $top_license = License::where('customer_id', auth()->user()->id)->latest()->take(5)->get();
        $active_license = License::where('customer_id', auth()->user()->id)->where('status', '1')->count();
        $deactive_license = License::where('customer_id', auth()->user()->id)->where('status', '0')->count();
        $date = \Carbon\Carbon::now()->addDays(14)->format('Y-m-d');
        $expiry_alerts = License::where('customer_id', auth()->user()->id)->where('date_of_expiry', '<=', $date)->count();
        $renew_alerts = License::where('customer_id', auth()->user()->id)->where('renew_date', '<=', $date)->count();
        $data = [
            'total_department',
            'total_license',
            'total_subscription',
            'total_managers',
            'top_license',
            'active_license',
            'deactive_license',
            'expiry_alerts',
            'renew_alerts'
        ];
        return view('customer.dashboard.dashboard', compact($data));
    }
    //------------------------------------ Customer-Dashboard End ------------------------------------//

    //------------------------------------ Customer-Subscription Start ------------------------------------//
    public function subscripton()
    {
        $packages = Package::all();
        //dd($packages);
        return view('customer.subscription.subcription', compact('packages'));
    }
    //------------------------------------ Customer-Subscription End ------------------------------------//

    //------------------------------------ Customer-Departments Start ------------------------------------//
    public function department()
    {
        $departments = Department::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('customer.department.department', compact('departments'));
    }

    public function export_departments_list(Request $request)
    {
        $departments = Department::whereIn('id', explode(',', $request->id))->get();
        $pdf = PDF::loadView('pdf.department-list', compact('departments'));
        return $pdf->download('DeptExportReport.pdf');
    }

    public function share_departments_list(Request $request)
    {
        $departments = Department::whereIn('id', explode(',', $request->id))->get();
        $pdf = PDF::loadView('emails.department-list', compact('departments'));
        Mail::send([], [], function ($message) use ($pdf, $request) {
            $message->to($request->email)
                ->subject('Department List PDF')
                ->attachData($pdf->output(), 'DeptExportReport.pdf', [
                    'mime' => 'application/pdf',
                ]);
        });
        return back()->with('success', 'Department List Sent Successfully');
    }

    public function add_department()
    {
        return view('customer.department.add-department');
    }

    public function store_department(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);
        $department = new Department();
        $total_departments = Department::where('user_id', auth()->user()->id)->count();
        if (auth()->user()->package_id == 1) {
            if ($total_departments < 1) {
                $department->create([
                    'user_id' => Auth::user()->id,
                    'name' => $request->name,
                    'description' => $request->description,
                ]);
                return redirect()->route('customer-department')->with('success', 'Department added successfully');
            } else {
                return redirect()->route('customer-department')->with('error', 'You reached your limit');
            }
        } elseif (auth()->user()->package_id == 2) {
            if ($total_departments < 10) {
                $department->create([
                    'user_id' => Auth::user()->id,
                    'name' => $request->name,
                    'description' => $request->description,
                ]);
                return redirect()->route('customer-department')->with('success', 'Department added successfully');
            } else {
                return redirect()->route('customer-department')->with('error', 'You reached your limit');
            }
        } elseif (auth()->user()->package_id == 3) {
            if ($total_departments < 100) {
                $department->create([
                    'user_id' => Auth::user()->id,
                    'name' => $request->name,
                    'description' => $request->description,
                ]);
                return redirect()->route('customer-department')->with('success', 'Department added successfully');
            } else {
                return redirect()->route('customer-department')->with('error', 'You reached your limit');
            }
        }
    }

    public function edit_department($id)
    {
        $department = Department::where('id', $id)->first();
        if ($department) {
            return view('customer.department.edit-department', compact('department'));
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }

    public function update_department(Request $request)
    {
        $department = Department::where('id', $request->id)->first();
        if ($department) {
            $department->name = $request->name;
            $department->description = $request->description;
            $department->save();
            return redirect()->route('customer-department')->with('success', 'Department updated successfully');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }

    public function delete_department($id)
    {
        $department = Department::where('id', $id)->first();
        $user = User::where('department_id', $department->id)->first();
        if ($department && $department->id != $user->department_id) {
            $department->delete();
            return back()->with('success', 'Department deleted successfully');
        } else {
            return back()->with('error', 'Delete managers of this department first');
        }
    }
    //------------------------------------ Customer-Departments End ------------------------------------//

    //------------------------------------ Customer-License Start ------------------------------------//
    public function license()
    {
        $licenses = License::where('customer_id', auth()->user()->id)->get();
        return view('customer.license.license', compact('licenses'));
    }

    public function export_license_list(Request $request)
    {
        $licenses = License::whereIn('id', explode(',', $request->id))->get();
        $pdf = PDF::loadView('pdf.license-list', compact('licenses'));
        return $pdf->download('LicExportReport.pdf');
    }

    public function share_license_list(Request $request)
    {
        $licenses = License::whereIn('id', explode(',', $request->id))->get();
        $pdf = PDF::loadView('emails.license-list', compact('licenses'));
        Mail::send([], [], function ($message) use ($pdf, $request) {
            $message->to($request->email)
                ->subject('License List PDF')
                ->attachData($pdf->output(), 'LicExportReport.pdf', [
                    'mime' => 'application/pdf',
                ]);
        });
        return back()->with('success', 'License List Sent Successfully');
    }

    public function add_license()
    {
        $departments = Department::where('user_id', auth()->user()->id)->get();
        // $services = Service::all();
        $users  = User::where('add_by', Auth::user()->id)->get();
        return view('customer.license.add-license', compact('departments', 'users'));
    }

    public function store_license(Request $request)
    {
        $total_license = License::where('customer_id', auth()->user()->id)->count();
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'purchase_date' => ['required'],
            'reffer' => ['required'],
            'department' => ['required'],
            'key' => ['required'],
            'additional_info' => ['nullable', 'string', 'max:2000'],
        ]);
        if (auth()->user()->package_id == 1) {
            if ($total_license < 10) {
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
                    'customer_id' => Auth::user()->id,
                    'description' => $request->description,
                    'price' => $request->price,
                    'purchase_date' => $request->purchase_date,
                    'additional_info' => $request->additional_info,
                    'license_owner' => $request->license_owner,
                    'renew_date' => $request->renew_date,
                    'renew_alert' => $request->renew_alert ? 1 : 0,
                    'expiry_alert' => $request->expiry_alert ? 1 : 0,
                    'reffer_to' =>  $request->reffer,
                    'department_id' =>  $request->department,
                    'date_of_issue' => $request->issue,
                    'date_of_expiry' => $request->expiry,
                    'key' =>  $request->key,
                    'attachment' => $request->attachment,
                ]);
                return redirect()->route('customer-license')->with('success', 'Customer License save successfully');
            } else {
                return redirect()->route('customer-license')->with('error', 'Limit reached');
            }
        } elseif (auth()->user()->package_id == 2) {
            if ($total_license < 100) {
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
                    'customer_id' => Auth::user()->id,
                    'description' => $request->description,
                    'price' => $request->price,
                    'purchase_date' => $request->purchase_date,
                    'additional_info' => $request->additional_info,
                    'license_owner' => $request->license_owner,
                    'renew_date' => $request->renew_date,
                    'renew_alert' => $request->renew_alert ? 1 : 0,
                    'expiry_alert' => $request->expiry_alert ? 1 : 0,
                    'reffer_to' =>  $request->reffer,
                    'department_id' =>  $request->department,
                    'date_of_issue' => $request->issue,
                    'date_of_expiry' => $request->expiry,
                    'key' =>  $request->key,
                    'attachment' => $request->attachment,
                ]);
                return redirect()->route('customer-license')->with('success', 'Customer License save successfully');
            } else {
                return redirect()->route('customer-license')->with('error', 'Limit reached');
            }
        } elseif (auth()->user()->package_id == 3) {
            if ($total_license < 1000) {
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
                    'customer_id' => Auth::user()->id,
                    'description' => $request->description,
                    'price' => $request->price,
                    'purchase_date' => $request->purchase_date,
                    'additional_info' => $request->additional_info,
                    'license_owner' => $request->license_owner,
                    'renew_date' => $request->renew_date,
                    'renew_alert' => $request->renew_alert ? 1 : 0,
                    'expiry_alert' => $request->expiry_alert ? 1 : 0,
                    'reffer_to' =>  $request->reffer,
                    'department_id' =>  $request->department,
                    'date_of_issue' => $request->issue,
                    'date_of_expiry' => $request->expiry,
                    'key' =>  $request->key,
                    'attachment' => $request->attachment,
                ]);
                return redirect()->route('customer-license')->with('success', 'Customer License save successfully');
            } else {
                return redirect()->route('customer-license')->with('error', 'Limit reached');
            }
        }
    }


    public function edit_license(Request $request, $id)
    {
        $license = License::find($id);
        $departments = Department::all();
        // $services = Service::all();
        $users  = User::where('add_by', Auth::user()->id)->get();
        $data = [
            'license',
            'departments',
            // 'services',
            'users',

        ];
        return view('customer.license.edit-license', compact($data));
    }

    public function update_license(Request $request)
    {
        $license = License::find($request->id);
        $this->validate($request, [

            'title' => ['required'],
            // 'service' =>  ['required'],
            'reffer' =>  ['required'],
            'issue' => ['required'],
            'expiry' => ['required'],
            'department' => ['required'],
            'key' => ['required'],
        ]);
        if ($license) {
            $license->title = $request->title;
            // $license->service_id = $request->service;
            $license->reffer_to = $request->reffer;
            $license->date_of_issue = $request->issue;
            $license->date_of_expiry = $request->expiry;
            $license->department_id = $request->department;
            $license->key = $request->key;
            $license->save();
            return redirect()->route('customer-license')->with('success', 'License updated successfully');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }

    public function delete_license($id)
    {
        $license = License::find($id);
        $user = User::where('id', $license->reffer_to)->first();
        if ($user) {
            $license->delete();
            return redirect()->route('customer-license')->with('success', 'License Deleted Successfully');
        } else {
            return back()->with('error', 'You are not able to delete this license');
        }
    }
    //------------------------------------Customer-License End ------------------------------------//

    //------------------------------------ Customer-Managment Start ------------------------------------//
    public function management()
    {
        $users = User::whereIn('role', ['manager', 'owner'])->where('company_id', auth()->user()->id)->get();

        return view('customer.management.management', compact('users'));
    }

    public function export_management_list(Request $request)
    {
        $managements = User::whereIn('id', explode(',', $request->id))->get();
        $pdf = PDF::loadView('pdf.management-list', compact('managements'));
        return $pdf->download('ManExportReport.pdf');
    }

    public function share_management_list(Request $request)
    {
        $managements = User::whereIn('id', explode(',', $request->id))->get();
        $pdf = PDF::loadView('emails.management-list', compact('managements'));
        Mail::send([], [], function ($message) use ($pdf, $request) {
            $message->to($request->email)
                ->subject('Manager List PDF')
                ->attachData($pdf->output(), 'ManExportReport.pdf', [
                    'mime' => 'application/pdf',
                ]);
        });
        return back()->with('success', 'Manager List Sent Successfully');
    }

    public function add_management()
    {
        $departments = Department::where('user_id', auth()->user()->id)->get();
        return view('customer.management.add-management', compact('departments'));
    }

    public function store_tool_owner(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'address' => ['required'],
            // 'phone' => ['required'],
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
            'company_id' => Auth::user()->id,
        ]);
        $details = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ];
        Mail::to($request->email)->send(new CustomerMail($details));
        return redirect()->route('customer-management')->with('success', '' . $request->role . ' added successfully mail sent');
    }

    public function edit_tool_owner(Request $request, $id)
    {
        $owner = User::find($id);
        $departments = Department::all();
        return view('customer.management.edit-management', compact('owner', 'departments'));
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
            return redirect()->route('customer-management')->with('success', 'Tool Owner updated successfully');
        } else {
            return back()->with('error', 'User not found!');
        }
    }

    public function delete_tool_owner($id)
    {
        $owner = User::find($id);
        $license = License::where('customer_id', $owner->id)->first();
        if (!$license) {
            $owner->delete();
            return redirect()->route('customer-management')->with('success', 'Tool Owner deleted successfully');
        } else {
            return back()->with('error', 'Delete License of this manager first');
        }
    }
    //------------------------------------ Customer-Management End ------------------------------------//

    //------------------------------------ Customer-Settings Start ------------------------------------//
    public function setting()
    {
        $user = User::where('role', 'customer')->where('id', Auth::user()->id)->first();
        return view('customer.settings.setting', compact('user'));
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
