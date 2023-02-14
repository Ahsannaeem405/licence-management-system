<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superadmin\SuperAdminController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\manager\ManagerController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/',[HomeController::class,'welcome'])->name('home');
Route::POST('/store-client',[HomeController::class,'store'])->name('store-client');
Route::POST('mail-company',[HomeController::class,'mail'])->name('mail-company');
Route::get('/stripe-payment',[HomeController::class,'stripe'])->name('stripe-payment')->middleware('auth');
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/subscription-login', [StripePaymentController::class, 'subscribe'])->name('login-subscription');
// Route::get('lang/{lang}',[HomeController::class, 'switchs_Lang'])->name('switchs-lang');
//------------------------------------------------- Super-Admin Start ----------------------------------------------//
Route::group(['prefix' => 'superadmin', 'middleware' => ['SuperAdmin','auth']], function () {
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin-dashbaord');
    Route::get('/subcription', [SuperAdminController::class, 'subscription'])->name('superadmin-subcription');
    Route::get('/customers', [SuperAdminController::class, 'customer'])->name('superadmin-customers');
    Route::get('/add-customers', [SuperAdminController::class, 'add_customer'])->name('superadmin-add-customers');
    Route::POST('/superadmin-store', [SuperAdminController::class, 'store_customer'])->name('superadmin-store');
    Route::get('/edit-customer/{id}', [SuperAdminController::class, 'edit_customer'])->name('superadmin-edit-customer');
    Route::POST('/update-customer/{id}', [SuperAdminController::class, 'update_customer'])->name('superadmin-update-customer');
    Route::get('/delete-customer/{id}', [SuperAdminController::class, 'delete_customer'])->name('superadmin-delete-customer');
    Route::get('/package', [SuperAdminController::class, 'Package'])->name('superadmin-package');
    // Route::get('/add-Package', [SuperAdminController::class, 'add_package'])->name('superadmin-add-package');
    // Route::POST('superadmin-store-package', [SuperAdminController::class, 'admin_store_package'])->name('superadmin-store-package');
    Route::get('/superadmin-edit-package/{id}', [SuperAdminController::class, 'admin_edit_package'])->name('superadmin-edit-package');
    Route::get('/superadmin-view-package/{id}', [SuperAdminController::class, 'admin_view_package'])->name('superadmin-view-package');
    Route::POST('/superadmin-update-package/{id}', [SuperAdminController::class, 'admin_update_package'])->name('superadmin-update-package');
    // Route::get('/superadmin-delete-package/{id}', [SuperAdminController::class, 'admin_delete_package'])->name('superadmin-delete-package');
    Route::get('/service',[SuperAdminController::class,'service'])->name('superadmin-service');
    Route::get('/add-service',[SuperAdminController::class,'add_service'])->name('superadmin-add-service');
    Route::post('/store-service',[SuperAdminController::class,'store_service'])->name('superadmin-store-service');
    Route::get('/edit-service/{id}',[SuperAdminController::class,'edit_service'])->name('superadmin-edit-service');
    Route::post('/update-service/{id}',[SuperAdminController::class,'update_service'])->name('superadmin-update-service');
    Route::get('/delete-service/{id}',[SuperAdminController::class,'delete_service'])->name('superadmin-delete-service');
    Route::get('/transaction', [SuperAdminController::class, 'transaction'])->name('superadmin-transaction');
    Route::get('/license', [SuperAdminController::class, 'license'])->name('superadmin-license');
    Route::get('/view-departments/{id}', [SuperAdminController::class,'departments'])->name('superadmin-view-departments');
    Route::get('/view-license/{id}', [SuperAdminController::class,'license_view'])->name('superadmin-view-license');
    Route::get('/license-delete/{id}', [SuperAdminController::class,'delete_license'])->name('license-delete');
    Route::get('multi-lang', [SuperAdminController::class, 'lang'])->name('superadmin-multi-lang');
    Route::post('/add-language',[SuperAdminCOntroller::class,'add_language'])->name('superadmin-add-language');
    Route::get('/edit-language/{id}',[SuperAdminController::class,'edit_language'])->name('superadmin-edit-language');
    Route::get('/delete-language/{id}',[SuperAdminController::class,'delete_language'])->name('superadmin-delete-language');
    Route::post('/update-language/{id}',[SuperAdminController::class,'update_language'])->name('superadmin-update-language');
    Route::get('/analytics', [SuperAdminController::class, 'analytics'])->name('superadmin-analytics');
    Route::get('/admin-setting', [SuperAdminController::class, 'setting'])->name('superadmin-setting');
    Route::POST('/update-admin-profile/{id}', [SuperAdminController::class,'admin_update_profile'])->name('superadmin-profile-update');
    Route::POST('/update-admin-password/{id}', [SuperAdminController::class,'admin_update_password'])->name('superadmin-admin-password');
}); 
    //-----------------------------------------Localization------------------------------------------//
    Route::get('lang/{lang}',[SuperAdminController::class, 'switchLang'])->name('lang.switch');
//------------------------------------------------- Super-Admin End ----------------------------------------------//

//------------------------------------------------- Customer Start ----------------------------------------------//
Route::group(['prefix' => 'customer', 'middleware' => ['Customer','auth']], function () {
    Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customer-dashboard');
    Route::get('/subcription', [CustomerController::class, 'subscripton'])->name('customer-subcription');
    Route::get('/department', [CustomerController::class, 'department'])->name('customer-department');
    Route::get('/add-department', [CustomerController::class, 'add_department'])->name('customer-add-department');
    Route::post('/store-department', [CustomerController::class, 'store_department'])->name('customer-store-department');
    Route::get('/edit-department/{id}', [CustomerController::class, 'edit_department'])->name('customer-edit-department');
    Route::post('/update-department/{id}', [CustomerController::class, 'update_department'])->name('customer-update-department');
    Route::get('/delete-department/{id}', [CustomerController::class, 'delete_department'])->name('customer-delete-department');
    Route::get('/license', [CustomerController::class, 'license'])->name('customer-license');
    Route::get('/add-license', [CustomerController::class, 'add_license'])->name('customer-add-license');
    Route::POST('/store-license', [CustomerController::class, 'store_license'])->name('customer-store-license');
    Route::get('/customer-edit-license/{id}', [CustomerController::class,'edit_license'])->name('customer-edit-license');
    Route::post('/customer-update-license/{id}', [CustomerController::class,'update_license'])->name('customer-update-license');
    Route::get('/customer-delete-license/{id}', [CustomerController::class, 'delete_license'])->name('customer-delete-license');
    Route::get('/management', [CustomerController::class, 'management'])->name('customer-management');
    Route::get('/add-management', [CustomerController::class, 'add_management'])->name('customer-add-management');
    Route::post('/store-management', [CustomerController::class, 'store_tool_owner'])->name('customer-store-management');
    Route::get('/edit-management/{id}', [CustomerController::class, 'edit_tool_owner'])->name('customer-edit-management');
    Route::post('/update-management/{id}', [CustomerController::class, 'update_tool_owner'])->name('customer-update-management');
    Route::get('/delete-management/{id}', [CustomerController::class, 'delete_tool_owner'])->name('customer-delete-management');
    Route::get('/customer-setting', [CustomerController::class, 'setting'])->name('customer-setting');
    Route::post('/update-profile/{id}', [CustomerController::class, 'update_customer_profile'])->name('customer-update-profile');
    Route::post('/update-password/{id}', [CustomerController::class, 'update_customer_password'])->name('customer-update-password');
    Route::post('/subscribe', [StripePaymentController::class, 'subscribe']);
    Route::get('/change_subscribe/{id}', [StripePaymentController::class, 'change_subscribe']);
});
//------------------------------------------------- Customer End ----------------------------------------------//

//------------------------------------------------- Manager & Tool Owner Start ----------------------------------------------//
Route::group(['prefix' => 'manager', 'middleware' => ['Manager','auth']], function () {
    Route::get('/dashboard', [ManagerController::class, 'dashboard'])->name('manager-dashbaord');
    Route::get('/company-info', [ManagerController::class, 'companyinfo'])->name('manager-company-info');
    Route::get('/license', [ManagerController::class, 'license'])->name('manager-license');
    Route::get('/add-license', [ManagerController::class, 'add_license'])->name('manager-add-license');
    Route::get('/edit-license/{id}',[ManagerController::class, 'edit_license'])->name('manager-edit-license');
    Route::post('/store-license', [ManagerController::class, 'store_license'])->name('manager-store-license');
    Route::post('/update-license/{id}',[ManagerController::class, 'update_license'])->name('manager-update-license');
    Route::get('/delete-license/{id}',[ManagerController::class, 'delete_license'])->name('manager-delete-license');
    Route::get('/setting',[ManagerController::class, 'setting'])->name('manager-setting');
    Route::post('/manager-update-profile/{id}', [ManagerController::class, 'update_manager_profile'])->name('manager-update-profile');
    Route::post('/manager-update-password/{id}', [ManagerController::class, 'update_manager_password'])->name('manager-update-password');
});

Route::group(['prefix' => 'manager', 'middleware' => 'Owner'], function () {
    Route::get('/management', [ManagerController::class, 'management'])->name('manager-management');
    Route::get('/add-management', [ManagerController::class, 'add_management'])->name('manager-add-management');
    Route::post('/store-management', [ManagerController::class, 'store_tool_owner'])->name('manager-store-management');
    Route::get('/edit-management/{id}', [ManagerController::class, 'edit_tool_owner'])->name('manager-edit-management');
    Route::post('/update-management/{id}', [ManagerController::class, 'update_tool_owner'])->name('manager-update-management');
    Route::get('/delete-management/{id}', [ManagerController::class, 'delete_tool_owner'])->name('manager-delete-management');
});

//------------------------------------------------- Manager & Tool Owner End ----------------------------------------------//

Auth::routes(['verify' => true]);