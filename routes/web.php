<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmindesignController;


// routes/web.php



Route::get('/', [HomeController::class, 'welcome'])->name('index');
Auth::routes();

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::post('/mail/{id}' , [HomeController::class, 'mail'])->name('contactmail');
// Route::get('/login/admin', [LoginController::class, 'login'])->name('admin');

Route::get('/analytics/report', [HomeController::class, 'analytic'])->name('analytic');

// Route::get('/login/vendor', [LoginController::class, 'showVendorLoginForm'])->name('vendor_login');
// Route::get('/login/customer', [LoginController::class,'showCustomerLoginForm'])->name('customer_login');
// Route::get('/register/vendor', [RegisterController::class,'showVendorRegisterForm'])->name('vendor_register');
// Route::get('/register/customer', [RegisterController::class,'showCustomerRegisterForm'])->name('customer_register');

// Route::post('/login/vendor', [LoginController::class,'vendorLogin']);
// Route::post('/login/customer', [LoginController::class,'customerLogin']);
// Route::post('/register/vendor', [RegisterController::class,'createVendor']);
// Route::post('/register/customer', [RegisterController::class,'createCustomer']);

// Route::get('/get_sub_category', [CustomerController::class,'get_sub_category'])->name('get_sub_category');





// Route::post('vendor/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('vendor.logout');

// Route::post('customer/logout', 'App\Http\Controllers\Auth\LoginController@customerLogout')->name('customer_logout');

Route::post('admin/logout', 'App\Http\Controllers\Auth\LoginController@adminLogout')->name('admin.logout');


// Route::group(['middleware' => 'auth:customer'], function () {

//     Route::get('/customer-home', [CustomerController::class, 'customer_home'])->name('customer');

// });
// Route::get('/customer_company/{id}', [CustomerController::class, 'customer_company'])->name('customer_company');

// Route::group(['middleware' => 'auth:vendor'], function () {

//     Route::get('/vendor-home', [VendorController::class, 'vendor_home'])->name('vendor');


// });




/**
 * Customer page
 */


// Route::get('customer_profile/edit/{id}', [CustomerController::class, 'customer_profile_edit'])->name('customer_profile_edit');

// Route::post('profile/updated/{id}', [CustomerController::class, 'update_profile_info'])->name('update_profile_info');

// Route::get('Add_tendor/information/{id}', [CustomerController::class, 'updateProfile'])->name('update_profile');

// Route::get('customer/wishlist', [CustomerController::class, 'wishlist'])->name('customer_wishlist');

// Route::get('customer/tender', [CustomerController::class, 'tender'])->name('customer_tendor');

// Route::post('tender_req/posted/{id}', [CustomerController::class, 'tender_req'])->name('tender_req');

// Route::get('sub_category_load/{id}', [CustomerController::class, 'sub_category_load']);
// // Route::get('tendor/request', [CustomerController::class, 'tendorRequest'])->name('tendor_request');

// Route::get('request/call/{id}', [CustomerController::class, 'request_call'])->name('request_call');

// Route::get('request/list', [CustomerController::class, 'request_call_li'])->name('request_call_li');


/*
 * Vendor page
 */
// Route::post('update/profile/{id}', [VendorController::class, 'update_vendor_profile'])->name('update_vendor_profile');
// Route::get('vendor/company/profile/{id}', [VendorController::class, 'vendor_company_profile'])->name('vendor_company_profile');


// Route::get('vendor/packages/yearly/', [VendorController::class, 'vendor_package'])->name('vendor_package');
// Route::get('vendor/package/monthly/', [VendorController::class, 'vendor_package_monthly'])->name('vendor_package_monthly');

// Route::get('tendor/request/{id}', [VendorController::class, 'tendor_request'])->name('tendor_request');
// // re call accept and reject

// Route::get('request/call/{id}', [VendorController::class, 'request_call'])->name('request_call');

// Route::get('request/action/accepted/{id}', [VendorController::class, 'request_action_accepted'])->name('request_action_accepted');

// Route::get('request/action/rejected/{id}', [VendorController::class, 'request_action_rejected'])->name('request_action_rejected');

// Route::get('request/request/removed/{id}', [VendorController::class, 'request_call_removed'])->name('request_call_removed');

// Route::get('request/action/removed/{id}', [VendorController::class, 'request_action_removed'])->name('request_action_removed');


// tendor accept and reject
// Route::get('tendor/action/accepted/{id}', [VendorController::class, 'tendor_action_accepted'])->name('tendor_action_accepted');

// Route::get('tendor/action/rejected/{id}', [VendorController::class, 'tendor_action_rejected'])->name('tendor_action_rejected');

// Route::get('tendor/request/removed/{id}', [VendorController::class, 'tendor_request_removed'])->name('tendor_request_removed');

// Route::get('tendor/action/removed/{id}', [VendorController::class, 'tendor_action_removed'])->name('tendor_action_removed');

// Route::get('package/checkout', [VendorController::class, 'package_checkout'])->name('package_checkout');

// Route::get('vendor_profile/edit/{id}', [VendorController::class, 'vendor_profile_edit'])->name('vendor_profile_edit');

// // //package decide
// Route::get('add_business/page', [VendorController::class, 'add_business'])->name('add_business');
// Route::post('update/business/', [VendorController::class, 'update_business'])->name('update_business');
// Route::get('vendor_profile/page', [VendorController::class, 'vendor_profile'])->name('vendor_profile');




/**
 * Admin portion
 */

Route::get('package/details', [AdminController::class, 'PackageDetail'])->name('PackageDetail')->middleware('is_admin');


Route::post('update/package/{id}', [AdminController::class, 'update_package'])->name('update_package')->middleware('is_admin');

Route::post('create/package/', [AdminController::class, 'store_package'])->name('store_package')->middleware('is_admin');


//delete-package
Route::delete('/delete-package/{id}', [AdminController::class, 'delete_package'])->name('delete_package');


Route::get('edit/package/{id}', [AdminController::class, 'edit_package'])->name('edit_package')->middleware('is_admin');

Route::get('create/package/', [AdminController::class, 'create_package'])->name('create_package')->middleware('is_admin');


Route::get('create/admin/', [AdminController::class, 'create_vendor'])->name('create_vendor')->middleware('is_admin');

Route::post('create/vendor/', [AdminController::class, 'store_vendor'])->name('store_vendor');

Route::get('view_package_detail/{id}', [AdminController::class, 'view_package_detail'])->name('view_package_detail')->middleware('is_admin');


// Design update

Route::get('create_image/', [AdmindesignController::class, 'create_image'])->name('create_image')->middleware('is_admin');
Route::post('update_image/', [AdmindesignController::class, 'update_image'])->name('update_image');
Route::get('advertisement/', [AdmindesignController::class, 'advertisement'])->name('advertisement')->middleware('is_admin');

//  advertisement
Route::post('update_advertisement/', [AdmindesignController::class, 'update_advertisement'])->name('update_advertisement')->middleware('is_admin');
Route::post('update_advertisement_next/', [AdmindesignController::class, 'update_advertisement_next'])->name('update_advertisement_next');
Route::post('update_edited_advertisement/{id}', [AdmindesignController::class, 'update_edited_advertisement'])->name('update_edited_advertisement');
Route::delete('/delete_advertisement/{id}', [AdmindesignController::class, 'delete_advertisement'])->name('delete_advertisement')->middleware('is_admin');

//  advertisement next
Route::get('edit_advertisement_next/', [AdmindesignController::class, 'edit_advertisement_next'])->name('edit_advertisement_next')->middleware('is_admin');
Route::post('update_edited_advertisement_next/{id}', [AdmindesignController::class, 'update_edited_advertisement_next'])->name('update_edited_advertisement_next');

Route::get('edit_advertisement/', [AdmindesignController::class, 'edit_advertisement'])->name('edit_advertisement')->middleware('is_admin');
Route::delete('/delete_advertisement_next/{id}', [AdmindesignController::class, 'delete_advertisement_next'])->name('delete_advertisement_next');



Route::get('main_category/', [AdmindesignController::class, 'main_category'])->name('main_category')->middleware('is_admin');
Route::post('update_category/', [AdmindesignController::class, 'update_category'])->name('update_category');
Route::get('view_category/', [AdmindesignController::class, 'view_category'])->name('view_category')->middleware('is_admin');
Route::delete('/delete_category/{id}', [AdmindesignController::class, 'delete_category'])->name('delete_category')->middleware('is_admin');
Route::delete('/delete_sub_category_now/{id}', [AdmindesignController::class, 'delete_sub_category_now'])->name('delete_sub_category_now')->middleware('is_admin');
Route::get('edit_category/{id}', [AdmindesignController::class, 'edit_category'])->name('edit_category')->middleware('is_admin')->middleware('is_admin');
Route::post('update_edited_category/{id}', [AdmindesignController::class, 'update_edited_category'])->name('update_edited_category');


Route::get('sub_category/', [AdmindesignController::class, 'sub_category'])->name('sub_category')->middleware('is_admin');
Route::post('update_sub_category/', [AdmindesignController::class, 'update_sub_category'])->name('update_sub_category');
Route::get('view_sub_category/', [AdmindesignController::class, 'view_sub_category'])->name('view_sub_category')->middleware('is_admin');
Route::delete('/delete_sub_category/{id}', [AdmindesignController::class, 'delete_sub_category'])->name('delete_sub_category');
Route::get('edit_sub_category/{id}', [AdmindesignController::class, 'edit_sub_category'])->name('edit_sub_category')->middleware('is_admin');
Route::post('update_edited_sub_category/{id}', [AdmindesignController::class, 'update_edited_sub_category'])->name('update_edited_sub_category');

// tendor detail
Route::get('admin/tendor/detail', [AdmindesignController::class, 'tendor_detail'])->name('admin_tendor_detail')->middleware('is_admin');
Route::get('edit/tendor/request/{id}', [AdmindesignController::class, 'edit_tendor_req'])->name('edit_tendor_req')->middleware('is_admin');
Route::post('update/tendor/request/{id}', [AdmindesignController::class, 'update_tendor_req'])->name('update_tendor_req');
Route::get('view/tendor/request/{id}', [AdmindesignController::class, 'view_tendor_req'])->name('view_tendor_req')->middleware('is_admin');






//admin Customer details
Route::get('user_accounts/', [AdminController::class, 'user_accounts'])->name('user_accounts')->middleware('is_admin');
Route::get('/getuser', [AdminController::class, 'get_user_accounts'])->name('get_user_accounts');



Route::get('user_account/{id}', [AdminController::class, 'user_account'])->name('user_account')->middleware('is_admin');
Route::get('user_account/tendor_req/{id}', [AdminController::class, 'tendor_req'])->name('tendor_req')->middleware('is_admin');
Route::post('updating/status/{id}', [AdminController::class, 'change_status'])->name('change_status');
Route::post('/change_business_featured_status', [AdminController::class, 'change_business_featured_status'])->name('change_business_featured_status');

Route::get('edit_customer/{id}', [AdminController::class, 'edit_customer'])->name('edit_customer')->middleware('is_admin');
Route::post('update_customer/{id}', [AdminController::class, 'update_customer'])->name('update_customer');
Route::delete('/delete_tendor/{id}', [AdminController::class, 'delete_tendor'])->name('delete_tendor');



//admin Vendor details
Route::get('vendor_accounts/', [AdminController::class, 'vendor_accounts'])->name('vendor_accounts')->middleware('is_admin'); // view vendor li
Route::get('vendor_account/{id}', [AdminController::class, 'vendor_account'])->name('vendor_account')->middleware('is_admin');  //view vendor profile
Route::get('edit_vendor/{id}', [AdminController::class, 'edit_vendor'])->name('edit_vendor')->middleware('is_admin');    //edit vendor profile
Route::post('update_vendor/{id}', [AdminController::class, 'update_vendor'])->name('update_vendor'); //update edited vendor profile

Route::get('company_profile/{id}', [AdminController::class, 'company_profile'])->name('company_profile')->middleware('is_admin');

Route::get('view/company_review/{id}', [AdminController::class, 'company_review'])->name('company_review')->middleware('is_admin');

Route::get('business_detail/{id}', [AdminController::class, 'business_detail'])->name('business_detail')->middleware('is_admin');
Route::get('add_company_profile/{id}', [AdminController::class, 'add_company_profile'])->name('add_company_profile')->middleware('is_admin');


Route::get('tendor_detail/{id}', [AdminController::class, 'tendor_detail'])->name('tendor_detail')->middleware('is_admin');
Route::post('change_account_status/{id}', [AdminController::class, 'change_account_status'])->name('change_account_status');
Route::post('/change_premium', [AdminController::class, 'change_premium'])->name('change_premium');
Route::post('change_package_details/{id}', [AdminController::class, 'change_package_details'])->name('change_package_details');

Route::post('/change-status', [AdminController::class, 'change_status_vendor'])->name('change_status_vendor');




/**
 * Forget Password
 */
//Vendor

Route::get('vendor-forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('vendor.forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


//customer
Route::get('customer-forget-password', [ForgotPasswordController::class, 'showcustomerForgetPasswordForm'])->name('customer.forget.password.get');
Route::post('customer-forget-password', [ForgotPasswordController::class, 'submitcustomerForgetPasswordForm'])->name('customer.forget.password.post');
Route::get('customer-reset-password/{token}', [ForgotPasswordController::class, 'showcustomerResetPasswordForm'])->name('customer.reset.password.get');
Route::post('customer-reset-password', [ForgotPasswordController::class, 'submitcustomerResetPasswordForm'])->name('customer.reset.password.post');




// drop zone


Route::post('add_business_admin/{id}', [AdmindesignController::class, 'add_business_admin'])->name('add_business_admin');
Route::post('add_business_admin/{id}', [AdmindesignController::class, 'add_business_admin'])->name('add_business_admin');
Route::post('update_business_admin/{id}', [AdmindesignController::class, 'update_business_admin'])->name('update_business_admin');

Route::delete('/delete_product/{id}', [AdmindesignController::class, 'delete_product'])->name('delete_product')->middleware('is_admin');

Route::post('add_product_admin/{id}', [AdmindesignController::class, 'add_product_admin'])->name('add_product_admin');
Route::post('add_more_product_admin/{id}', [AdmindesignController::class, 'add_more_product_admin'])->name('add_more_product_admin');
Route::post('update_product_admin/{id}', [AdmindesignController::class, 'update_product_admin'])->name('update_product_admin');

Route::post('add_image_admin/{id}', [AdmindesignController::class, 'add_image_admin'])->name('add_image_admin');
Route::post('update_image_admin/{id}', [AdmindesignController::class, 'update_image_admin'])->name('update_image_admin');
Route::post('update_more_image_admin/{id}', [AdmindesignController::class, 'update_more_image_admin'])->name('update_more_image_admin');
Route::delete('/delete_image/{id}', [AdmindesignController::class, 'delete_image'])->name('delete_image');

Route::get('add_product_image/{id}', [AdminController::class, 'add_product_image'])->name('add_product_image')->middleware('is_admin');
Route::delete('/delete/business/{id}', [AdmindesignController::class, 'delete_business'])->name('delete_business');
Route::post('/change_business_status', [AdminController::class, 'change_business_status'])->name('change_business_status');
Route::get('edit/company_profile/{id}', [AdmindesignController::class, 'edit_company_profile'])->name('edit_company_profile')->middleware('is_admin');

// footer detail


//Contact us
Route::get('contact/us', [AdmindesignController::class, 'contact_us'])->name('contact_us')->middleware('is_admin');

//About us
Route::get('about_us/', [AdmindesignController::class, 'about_us'])->name('about_us')->middleware('is_admin');
Route::post('update_about_us/', [AdmindesignController::class, 'update_about_us'])->name('update_about_us');
Route::get('admin/edit/about_us', [AdmindesignController::class, 'edit_about'])->name('edit_about')->middleware('is_admin');
Route::post('admin/update/about_us/{id}', [AdmindesignController::class, 'update_edited_about_us'])->name('update_edited_about_us');

//FAQ
Route::get('faq/', [AdmindesignController::class, 'faq'])->name('faq')->middleware('is_admin');
Route::post('update/faq', [AdmindesignController::class, 'update_faq'])->name('update_faq');
Route::get('edit/faq/', [AdmindesignController::class, 'edit_faq'])->name('edit_faq')->middleware('is_admin');
Route::post('update/edited/faq/{id}', [AdmindesignController::class, 'update_edited_faq'])->name('update_edited_faq');

//privacy policy
Route::get('privacy_policy/', [AdmindesignController::class, 'privacy_policy'])->name('privacy_policy')->middleware('is_admin');
Route::post('update/privacy_policy', [AdmindesignController::class, 'update_privacy_policy'])->name('update_privacy_policy');
Route::get('edit/privacy_policy/', [AdmindesignController::class, 'edit_privacy_policy'])->name('edit_privacy_policy')->middleware('is_admin');
Route::post('update/edited/privacy_policy/{id}', [AdmindesignController::class, 'update_edited_privacy_policy'])->name('update_edited_privacy_policy');

//Terms of us
Route::get('terms_of_use/', [AdmindesignController::class, 'terms_of_use'])->name('terms_of_use')->middleware('is_admin');
Route::post('update/terms_of_use', [AdmindesignController::class, 'update_terms_of_use'])->name('update_terms_of_use');
Route::get('edit/terms_of_use/', [AdmindesignController::class, 'edit_terms_of_use'])->name('edit_terms_of_use')->middleware('is_admin');
Route::post('update/edited/terms_of_use/{id}', [AdmindesignController::class, 'update_edited_terms_of_use'])->name('update_edited_terms_of_use');

// Admin profile dtail
Route::get('admin/profile/', [HomeController::class, 'admin_profile'])->name('admin_profile')->middleware('is_admin');
Route::post('admin/profile/update/', [HomeController::class, 'update_profile'])->name('update_profile');


// update review

Route::post('update/review/{id}', [AdmindesignController::class, 'update_review'])->name('update_review');


Route::get('sub_category_load', [AdminController::class, 'sub_category_load'])->name('sub_category_filter');

//sub categories in home page from admin panel
Route::get('sub_category_home/', [AdmindesignController::class, 'sub_category_home'])->name('sub_category_home')->middleware('is_admin');

Route::delete('/delete/category_home/{id}', [AdmindesignController::class, 'delete_category_home'])->name('delete_category_home');
Route::get('add/home_category/', [AdmindesignController::class, 'add_home_category'])->name('add_home_category')->middleware('is_admin');
Route::post('add/categoryhome/', [AdmindesignController::class, 'add_category_home'])->name('add_category_home')->middleware('is_admin');
Route::get('edit/home_category/{id}', [AdmindesignController::class, 'edit_home_category'])->name('edit_home_category')->middleware('is_admin');
Route::post('update/category_home/{id}', [AdmindesignController::class, 'update_category_home'])->name('update_category_home')->middleware('is_admin');



Route::get('business/analytics/', [AdmindesignController::class, 'business_analytics'])->name('business_analytics')->middleware('is_admin');
Route::get('view/business/analytics/{id}', [AdmindesignController::class, 'view_business_analytics'])->name('view_business_analytics')->middleware('is_admin');


