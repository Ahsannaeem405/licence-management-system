<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superadmin\SuperAdminController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\manager\ManagerController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminProfileController;


use GuzzleHttp\Middleware;

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

Route::get('logout',[LogoutController::class,'logout'])->name('logout');

 Route::group(['prefix' => 'superadmin' , 'middleware' => 'SuperAdmin'],function(){


    Route::get('/dashboard',[SuperAdminController::class,'index'])->name('superadmin-dashbaord');
    Route::get('/subcription',[SuperAdminController::class,'create'])->name('superadmin-subcription');
    Route::get('/add-customers',[SuperAdminController::class,'addcustomer'])->name('superadmin-add-customers');
     Route::get('Package',[SuperAdminController::class,'Package'])->name('superadmin-package');
     Route::get('/add-Package',[SuperAdminController::class,'addpackage'])->name('superadmin-add-package');
     Route::get('/transaction',[SuperAdminController::class,'transaction'])->name('superadmin-transaction');
     Route::get('/license',[SuperAdminController::class,'license'])->name('superadmin-license');
     Route::get('/view-license',[SuperAdminController::class,'view'])->name('superadmin-view-license');
     Route::get('multi-lang',[SuperAdminController::class,'lang'])->name('superadmin-multi-lang');
     Route::get('/analytics',[SuperAdminController::class,'analytics'])->name('superadmin-analytics');
    //  Route::get('/setting',[SuperAdminController::class,'setting'])->name('superadmin-setting');
    // AdminCustomerController
    Route::get('/customers',[AdminCustomerController::class,'customer'])->name('superadmin-customers');
    Route::POST('/superadmin-store',[AdminCustomerController::class,'store'])->name('superadmin-store');
    Route::get('/edit/{id}',[AdminCustomerController::class,'edit'])->name('superadmin-edit');
    Route::POST('/update-customer/{id}',[AdminCustomerController::class,'update_customer'])->name('superadmin-update-customer');
    Route::get('/delete/{id}',[AdminCustomerController::class,'destroy'])->name('superadmin-delete-customer');
    // AdminProfileController
    Route::get('/setting',[AdminProfileController::class,'setting'])->name('superadmin-setting');
    Route::POST('/update-admin/{id}',[AdminProfileController::class,'updateadmin'])->name('superadmin-profile-update');
   
 });

 Route::group(['prefix' => 'customer', 'middleware' => 'Customer'],function(){
    Route::get('/dashboard',[CustomerController::class,'index'])->name('customer-dashboard');
    Route::get('/subcription',[CCustomerControllerUS::class,'subcripton'])->name('customer-subcription');
    Route::get('/department',[CustomerController::class,'department'])->name('customer-department');
    Route::get('/add-department',[CCustomerControllerUS::class,'adddepartment'])->name('customer-add-department');
    Route::get('/license',[CustomerController::class,'license'])->name('customer-license');
    Route::get('/addlicense',[CUSCustomerController::class,'addlicense'])->name('customer-add-license');
    Route::get('/management',[CUCustomerControllerS::class,'management'])->name('customer-management');
    Route::get('/add-management',[CUSCustomerController::class,'addmanagement'])->name('customer-add-management');
    Route::get('/setting',[CustomerController::class,'setting'])->name('customer-setting');
});






Route::group(['prefix' => 'manager', 'middleware' => 'Manager'],function(){
    Route::get('/dashboard',[ManagerController::class,'index'])->name('manager-dashbaord');
    Route::get('/company-info',[ManagerController::class,'companyinfo'])->name('manager-company-info');
    Route::get('/license',[ManagerController::class,'license'])->name('manager-license');
    Route::get('/addlicense',[ManagerController::class,'addlicense'])->name('manager-add-license');
    Route::get('/setting',[ManagerController::class,'setting'])->name('manager-setting');



});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// });