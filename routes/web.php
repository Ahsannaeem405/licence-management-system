<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superadmin\SuperAdminController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\manager\ManagerController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\superadmin\SettingController;


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
Route::POST('/store-client',[HomeController::class,'store'])->name('store-client');
Route::POST('mail-company',[HomeController::class,'mail'])->name('mail-company');
Route::get('/stripe-payment',[HomeCOntroller::class,'stripe'])->name('stripe-payment');



Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'superadmin', 'middleware' => 'SuperAdmin'], function () {
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin-dashbaord');
    Route::get('/subcription', [SuperAdminController::class, 'subscription'])->name('superadmin-subcription');
    Route::get('/customers', [SuperAdminController::class, 'customer'])->name('superadmin-customers');
    Route::get('/add-customers', [SuperAdminController::class, 'add_customer'])->name('superadmin-add-customers');
    Route::POST('/superadmin-store', [SuperAdminController::class, 'store_customer'])->name('superadmin-store');
    Route::get('/edit-customer/{id}', [SuperAdminController::class, 'edit_customer'])->name('superadmin-edit-customer');
    Route::POST('/update-customer/{id}', [SuperAdminController::class, 'update_customer'])->name('superadmin-update-customer');
    Route::get('/delete-customer/{id}', [SuperAdminController::class, 'delete_customer'])->name('superadmin-delete-customer');
    Route::get('Package', [SuperAdminController::class, 'Package'])->name('superadmin-package');
    Route::get('/add-Package', [SuperAdminController::class, 'add_package'])->name('superadmin-add-package');
    Route::get('/transaction', [SuperAdminController::class, 'transaction'])->name('superadmin-transaction');
    Route::get('/license', [SuperAdminController::class, 'license'])->name('superadmin-license');
    Route::get('/view-departments/{id}', [SuperAdminController::class,'departments'])->name('superadmin-view-departments');
    Route::get('/view-license/{id}', [SuperAdminController::class,'license_view'])->name('superadmin-view-license');
    Route::get('/license-delete/{id}', [SuperAdminController::class,'delete_license'])->name('license-delete');
    Route::get('multi-lang', [SuperAdminController::class, 'lang'])->name('superadmin-multi-lang');
    Route::get('/analytics', [SuperAdminController::class, 'analytics'])->name('superadmin-analytics');
    Route::get('/admin-setting', [SuperAdminController::class, 'setting'])->name('superadmin-setting');
    Route::POST('/update-admin-profile/{id}', [SuperAdminController::class,'admin_update_profile'])->name('superadmin-profile-update');
    Route::POST('/update-admin-password/{id}', [SuperAdminController::class,'admin_update_password'])->name('superadmin-admin-password');
    Route::POST('superadmin-store-package', [SuperAdminController::class, 'admin_store_package'])->name('superadmin-store-package');
    Route::get('/superadmin-edit-package/{id}', [SuperAdminController::class, 'admin_edit_package'])->name('superadmin-edit-package');
    Route::POST('/superadmin-update-package/{id}', [SuperAdminController::class, 'admin_update_package'])->name('superadmin-update-package');
    Route::get('/superadmin-delete-package/{id}', [SuperAdminController::class, 'admin_delete_package'])->name('superadmin-delete-package');
}); 
 


Route::group(['prefix' => 'customer', 'middleware' => 'Manager'], function () {
    Route::get('/dashboard', [CustomerController::class, 'index'])->name('customer-dashboard');
    Route::get('/subcription', [CustomerController::class, 'subscripton'])->name('customer-subcription');
    Route::get('/department', [CustomerController::class, 'department'])->name('customer-department');
    Route::get('/add-department', [CustomerController::class, 'adddepartment'])->name('customer-add-department');
    Route::get('/license', [CustomerController::class, 'license'])->name('customer-license');
    Route::get('/addlicense', [CustomerController::class, 'addlicense'])->name('customer-add-license');
    Route::POST('/store-license', [CustomerController::class, 'store_license'])->name('license-store-license');
    Route::get('/customer-edit-license/{id}', [CustomerController::class,'customer_edit_license'])->name('customer-edit-license');
    Route::get('/customer-update-license/{id}', [CustomerController::class,'customer_update_license'])->name('customer-update-license');
    Route::get('/customer-delete-license/{id}', [CustomerController::class, 'customer_license_delete'])->name('customer-delete-license');
    Route::get('/management', [CustomerController::class, 'management'])->name('customer-management');
    Route::get('/add-management', [CustomerController::class, 'addmanagement'])->name('customer-add-management');
    Route::get('/setting', [CustomerController::class, 'setting'])->name('customer-setting');
});


Route::group(['prefix' => 'manager', 'middleware' => 'Customer'], function () {
    Route::get('/dashboard', [ManagerController::class, 'index'])->name('manager-dashbaord');
    Route::get('/company-info', [ManagerController::class, 'companyinfo'])->name('manager-company-info');
    Route::get('/license', [ManagerController::class, 'license'])->name('manager-license');
    Route::get('/addlicense', [ManagerController::class, 'addlicense'])->name('manager-add-license');
    Route::get('/setting', [ManagerController::class, 'setting'])->name('manager-setting');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// });