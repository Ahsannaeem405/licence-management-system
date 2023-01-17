<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//     public function index()
//     {
//         return view('admin.dashboard');
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         return view('company.subcription');
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function customer()
//     {
//         return view('company.customers');
//     }


//     public function transaction()
//     {
//         return view('company.transaction');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Form  $form
//      * @return \Illuminate\Http\Response
//      */
//     public function addcustomer()
//     {
//         return view('company.add-customers');
//     }

//     public function Package()
//     {
//         return view('company.Package');
//     }

//     public function addpackage()
//     {
//         return view('company.addpackage');
//     }

//     public function license()
//     {
//         return view('company.license');
//     }
//     public function view()
//     {
//         return view('company.view');
//     }
// public function lang(){
//     return view('company.lang');
// }

//     public function setting()
//     {
//         return view('company.setting');
//     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
