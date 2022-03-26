<?php

use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return redirect('/home');
});



Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    
    Route::post('/userRegister', [RegisterController::class, 'userRegister']);
    Route::post('/vendorRegister', [RegisterController::class, 'vendorRegister']);

    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Route::post('/userRegister', [App\Http\Controllers\HomeController::class, 'userRegistration'])->name('userRegister');
    //Route::post('/vendorRegister', [App\Http\Controllers\HomeController::class, 'vendorRegistration'])->name('vendorRegister');
    Route::post('/checkEmail', [App\Http\Controllers\HomeController::class, 'checkEmail'])->name('checkEmail');


    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'vendor_profile'])->name('vendor_profile')->middleware('auth');
    Route::post('/profile', [App\Http\Controllers\HomeController::class, 'vendor_update_profile'])->name('vendor_update_profile');

    Route::get('/info', [App\Http\Controllers\HomeController::class, 'vendor_info'])->name('vendor_info')->middleware('auth');
    Route::post('/info', [App\Http\Controllers\HomeController::class, 'vendor_update_info'])->name('vendor_update_info');

    Route::get('/individualProduct', [App\Http\Controllers\HomeController::class, 'VendorindividualProduct'])->name('vendor_individual_product')->middleware('auth');
    Route::post('/individualProduct', [App\Http\Controllers\HomeController::class, 'VendorindividualProduct_post'])->name('vendor_individual_product_post');


    Route::get('/add_pmc', [App\Http\Controllers\HomeController::class, 'add_pmc'])->name('add_pmc')->middleware('auth');
    Route::post('/add_pmc', [App\Http\Controllers\HomeController::class, 'add_pmc_post'])->name('add_pmc_post')->middleware('auth');

    Route::get('/individualProductEdit/{id}', [App\Http\Controllers\HomeController::class, 'VendorindividualProductEdit'])->name('vendor_individual_product_Edit')->middleware('auth');
    Route::post('/individualProductEdit_post', [App\Http\Controllers\HomeController::class, 'VendorindividualProductEdit_Post'])->name('individualProductEdit_post');

    Route::get('/myProducts', [App\Http\Controllers\HomeController::class, 'myProducts'])->name('myProducts')->middleware('auth');
    Route::get('/delete_product/{id}', [App\Http\Controllers\HomeController::class, 'delete_product'])->name('delete_product');

    Route::get('/deleteSlide/{id}', [App\Http\Controllers\HomeController::class, 'deleteSlide'])->name('deleteSlide');

    Route::get('/deleteMedia/{id}', [App\Http\Controllers\HomeController::class, 'deleteMedia'])->name('deleteMedia');


    Route::get('/deleteCert/{id}', [App\Http\Controllers\HomeController::class, 'deleteCert'])->name('deleteCert');

    Route::get('/rfq', [App\Http\Controllers\HomeController::class, 'Vendor_RFQ'])->name('vendor_rfq');
    Route::post('/rfq', [App\Http\Controllers\HomeController::class, 'Vendor_RFQ_Post'])->name('Vendor_RFQ_Post');

    Route::get('/website/{vendor_id?}/{vendor_name?}', [App\Http\Controllers\HomeController::class, 'Vendor_website'])->name('vendor_website');
    Route::get('/Vendor_ContactUs/{vendor_id?}', [App\Http\Controllers\HomeController::class, 'Vendor_ContactUs'])->name('Vendor_ContactUs');

Route::get('/product/{pmc_id?}/{user_id?}', [App\Http\Controllers\HomeController::class, 'product_pmc'])->name('product_pmc');


Route::get('/Vendor_contact_us/{vendor_id?}', [App\Http\Controllers\HomeController::class, 'Vendor_contact_us'])->name('Vendor_contact_us');
    Route::get('/Vendor_contact_us/{vendor_id?}', [App\Http\Controllers\HomeController::class, 'Vendor_contact_us'])->name('Vendor_contact_us');


    Route::get('/product/{product_name}', [App\Http\Controllers\HomeController::class, 'product'])->name('product');

    Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');


    Route::post('/contactUs', [App\Http\Controllers\HomeController::class, 'contact_us_post'])->name('contactUs');
    Route::get('/delete_contactUs/{id}', [App\Http\Controllers\HomeController::class, 'delete_contactUs'])->name('delete_contactUs');

    Route::get('/keywords_details/{name}', [App\Http\Controllers\HomeController::class, 'keywords_details'])->name('keywords_details');

    Route::get('/product_media/{id}', [App\Http\Controllers\HomeController::class, 'product_media'])->name('product_media');


    Route::post('/keywordPrice', [App\Http\Controllers\HomeController::class, 'keywordPrice'])->name('keywordPrice');


    Route::get('/vendor_contacts', [App\Http\Controllers\HomeController::class, 'vendor_contacts'])->name('vendor_contacts');
    Route::get('/notifications', [App\Http\Controllers\HomeController::class, 'vendor_notifications'])->name('notifications');
    Route::get('/delete_notification/{id}', [App\Http\Controllers\HomeController::class, 'delete_notification'])->name('delete_notification');
    Route::get('/user_product', [App\Http\Controllers\HomeController::class, 'user_product'])->name('user_product');
});
Route::get('/pdf', [App\Http\Controllers\HomeController::class, 'pdf'])->name('pdf');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    echo '<script>alert("cache clear Success")</script>';
});
