<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuycarController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\CardetailsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CarController;



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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
//user
Route::get('/',[HomeController::class,'index']);
Route::get('/cars',[BuycarController::class,'index']);
// Route::get('/cars/search',[BuycarController::class,'carSearch']);
Route::get('/contact',[ContactusController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/team',[AboutController::class,'team']);
Route::get('/testimonials',[AboutController::class,'testimonials']);
Route::get('/faq',[AboutController::class,'faq']);
Route::get('/terms',[AboutController::class,'terms']);
Route::get('cardetails/{id}','CardetailsController@cardetails')->name('cardetails');

// Route::get('/showcardetails/{id}',[CardetailsController::class,'showcardetails']);
Route::get('/payment',[PaymentController::class,'payment']);
Route::get('/paymenttime',[PaymentController::class,'paymenttime']);
//booking
Route::get('/booking',[BookingController::class,'booking']);
Route::post('/addbooking',[BookingController::class,'addbooking']);


//admin
Route::get('/admin_login', function () {
    return view('admin.auth.login');
});

    Route::namespace('Admin')->prefix('/admin')->name('admin.')->group(function(){
        Route::namespace('Auth')->middleware('guest:admin')->group(function(){
            //login
           Route::get('login','AuthenticatedSessionController@create')->name('login'); 
           Route::post('login','AuthenticatedSessionController@store')->name('adminlogin'); 
           Route::post('password/forgot-password', [ForgotPasswordController::class, 'sendResetLinkResponse'])->name('forgetpassword');
            Route::post('password/reset', [ResetPasswordController::class, 'sendResetResponse'])->name('resetpassword');
        });
        Route::middleware('admin')->group(function(){

     
        Route::get('/dashboard','HomeController@index')->name('dashboard');
       // Route::POST('/logout', 'HomeController@logout')->name('logout');
       Route::post('/logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
       //admin panel
       Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::post('/update-profile', 'AdminController@updateProfile')->name('update.profile');
    Route::get('/change-password', 'AdminController@changePassword')->name('change.password');
    Route::post('/update-password', 'AdminController@updatePassword')->name('update.password');
    
   //car details
    Route::get('/car','CarController@index')->name('car');
    Route::get('/addcar','CarController@add')->name('addcar');
    Route::post('/createcar','CarController@create')->name('createcar');
    Route::get('/editcar/{id}','CarController@edit')->name('editcar');
    Route::post('/updatecar','CarController@update')->name('updatecar');
    Route::delete('deletecar/{id}','CarController@destroy')->name('deletecar');

    Route::get('/brand','CarbrandController@index')->name('brand');
    Route::get('/addbrand','CarbrandController@add')->name('addbrand');
    Route::post('/createbrand','CarbrandController@create')->name('createbrand');
    Route::get('/editbrand/{id}','CarbrandController@edit')->name('editbrand');
    Route::post('/updatebrand','CarbrandController@update')->name('updatebrand');
    Route::delete('deletebrand/{id}','CarbrandController@destroy')->name('deletebrand');
  

    //car's multiple image
    Route::get('/multiple_image','CarController@multiple_image')->name('multiple_image');
    // Route::get('/addmultiple_image','CarController@addmultiple_image')->name('addmultiple_image');
    // Route::post('/createmultiple_image','CarController@createmultiple_image')->name('createmultiple_image');
    Route::delete('deletemultiple_image/{id}','CarController@destroymultiple_image')->name('deletemultiple_image');
       // booking
      
       Route::get('/showbooking','BookingController@index')->name('showbooking');
       Route::get('/booked/{id}','BookingController@booked')->name('booked');
  
       //download
      
    });
    //salary
    

    Route::post('/logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
    Route::view('forgot_password', 'auth.reset_password')->name('password.reset');
});
    