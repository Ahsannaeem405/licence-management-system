<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.company.subcription');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function customer()
    {
        return view('superadmin.company.customers');
    }


    public function transaction()
    {
        return view('superadmin.company.transaction');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function addcustomer()
    {
        return view('superadmin.company.add-customers');
    }

    public function Package()
    {
        return view('superadmin.company.Package');
    }

    public function addpackage()
    {
        return view('superadmin.company.addpackage');
    }

    public function license()
    {
        return view('superadmin.company.license');
    }
    public function view()
    {
        return view('superadmin.company.view');
    }
    public function lang()
    {
        return view('superadmin.company.lang');
    }

    public function setting()
    {
        return view('superadmin.company.setting');
    }
}
