<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\mail\CustomerMail;
use Illuminate\Support\Facades\Mail;

class AdminCustomerController extends Controller
{

    public function customer()
    {

        $admin = User::where('role', 'customer')->get();
        return view('superadmin.company.customers', compact('admin'));
    }

    public function store(Request $request)
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


        // $email = $request->get('email');
        $details = [

            'email' => $request->email,
            'password' => $request->password,

        ];

        Mail::to($request->email)->send(new CustomerMail($details));


        return redirect()->route('superadmin-customers')->with('success', 'Customer Added Successfully');
    }
    public function edit(Request $request, $id)
    {

        $admin = User::find($id);

        return view('superadmin.company.edit', compact('admin'));
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

    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect()->route('superadmin-customers')->with('success', 'Customer Deleted Successfully');
    }
}
