<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superadmin\SuperAdminController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\manager\ManagerController;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::group(['prefix' => 'superadmin'],function(){

    Route::get('/dashboard',[SuperAdminController::class,'index'])->name('superadmin-dashbaord');
    Route::get('/subcription',[SuperAdminController::class,'create'])->name('superadmin-subcription');
    Route::get('/customers',[SuperAdminController::class,'customer'])->name('superadmin->customers');
    Route::get('/add-customers',[SuperAdminController::class,'addcustomer'])->name('superadmin-add-customers');
     Route::get('Package',[SuperAdminController::class,'Package'])->name('superadmin-package');
     Route::get('/add-Package',[SuperAdminController::class,'addpackage'])->name('superadmin-add-package');
     Route::get('/transaction',[SuperAdminController::class,'transaction'])->name('superadmin-transaction');
     Route::get('/license',[SuperAdminController::class,'license'])->name('superadmin-license');
     Route::get('/view-license',[SuperAdminController::class,'view'])->name('superadmin-view-license');
     Route::get('multi-lang',[SuperAdminController::class,'lang'])->name('superadmin-multi-lang');
     Route::get('/setting',[SuperAdminController::class,'setting'])->name('superadmin-setting');
   
 });

 Route::group(['prefix' => 'customer'],function(){
    Route::get('/dashboard',[CustomerController::class,'index'])->name('customer-dashboard');
    Route::get('/subcription',[CustomerController::class,'subcripton'])->name('customer-subcription');
    Route::get('/department',[CustomerController::class,'department'])->name('customer-department');
    Route::get('/add-department',[CustomerController::class,'adddepartment'])->name('customer-add-department');
    Route::get('/license',[CustomerController::class,'license'])->name('customer-license');
    Route::get('/addlicense',[CustomerController::class,'addlicense'])->name('customer-add-license');
    Route::get('/management',[CustomerController::class,'management'])->name('customer-management');
    Route::get('/add-management',[CustomerController::class,'addmanagement'])->name('customer-add-management');
    Route::get('/setting',[CustomerController::class,'setting'])->name('customer-setting');
});






Route::group(['prefix' => 'manager'],function(){
    Route::get('/dashboard',[ManagerController::class,'index'])->name('manager-dashbaord');
    Route::get('/company-info',[ManagerController::class,'companyinfo'])->name('manager-company-info');
    Route::get('/license',[ManagerController::class,'license'])->name('manager-license');
    Route::get('/addlicense',[ManagerController::class,'addlicense'])->name('manager-add-license');
    Route::get('/setting',[ManagerController::class,'setting'])->name('manager-setting');



});