<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.dashboard');
    }
    public function subcripton()
    {
        return view('customer.subcription');
    }

    public function department()
    {
        return view('customer.department');
    }

    public function adddepartment()
    {
        return view('customer.adddepartment');
    }


    public function license()
    {
        return view('customer.license');
    }


    public function addlicense()
    {
        return view('customer.addlicense');
    }

    public function management()
    {
        return view('customer.management');
    }

    public function addmanagement()
    {
        return view('customer.addmanagement');
    }

    public function setting()
    {
        return view('customer.setting');
    }
}
