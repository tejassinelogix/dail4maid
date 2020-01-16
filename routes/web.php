<?php

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

// Route::get('/', function () {
//     // return view('welcome');
//       return view('shop.index');
// });

Route::get('/', [
'uses' => 'Auth\AdminLoginController@showLoginForm',
//'as' => 'product.index'
]);

// Route::get('/', [
// 'uses' => 'ProductController@getIndex',
// 'as' => 'product.index'
// ]);

Route::get('locale/{locale}', function ($locale) {
      Session::put('locale',$locale);
      return redirect()->back();    
});

Auth::routes();
Route::get('/home', 'UserController@index')->name('home');

Route::get('/add-to-cart/{id}',['uses' => 'ProductController@getAddToCart','as' => 'product.addToCart']);
Route::get('/shopping-cart',['uses' => 'ProductController@getCart','as' => 'product.shoppingCart']);

Route::get('/reduce/{id}',['uses' => 'ProductController@getReduceByOne','as' => 'product.reduceByOne']);
Route::get('/increase/{id}',['uses' => 'ProductController@getIncreaseByOne','as' => 'product.increaseByOne']);
Route::get('/remove/{id}',['uses' => 'ProductController@getRemoveItem','as' => 'product.remove']);


Route::get('auth/{driver}', ['as' => 'socialAuth', 'uses' => 'Auth\SocialController@redirectToProvider']);
Route::get('auth/{driver}/callback', ['as' => 'socialAuthCallback', 'uses' => 'Auth\SocialController@handleProviderCallback']);

Route::get('/checkout',['uses' => 'ProductController@getCheckout', 'as' => 'checkout', 'middleware' => 'auth']);
Route::post('/checkout',['uses' => 'ProductController@postCheckout', 'as' => 'checkout', 'middleware' => 'auth']);

Route::get('/product-details/{id}',['uses' => 'ProductController@getProductdetails','as' => 'product.details']);


//------------------------User--------------------------------//

Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
Route::get('/change-password', 'UserController@changePassword')->name('change-password');
Route::get('/user-orders', 'UserController@orders')->name('user-orders');
Route::get('/user-wishlist', 'UserController@wishlist')->name('user-wishlist');
Route::get('/user-review-ratings', 'UserController@reviewRatings')->name('user-review-ratings');
Route::get('/user-complaints', 'UserController@complaints')->name('user-complaints');
Route::get('/user-track-order', 'UserController@trackOrder')->name('user-track-order');
Route::post('/changePassword','UserController@change_Password')->name('changePassword');

//------------------------User--------------------------------//



//------------------------Admin-------------------------------//

Route::prefix('admin')->group(function(){
      
      Route::get('/','Auth\AdminLoginController@showLoginForm');

      Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
      Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
      Route::get('/','AdminController@index')->name('admin.dashboard');
      Route::post('/','AdminController@index')->name('admin.dashboard');

      Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
      Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

      Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
      Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
      Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
      Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

      Route::get('/registration','Auth\AdminLoginController@showRegForm')->name('admin.register');
      Route::post('/vendor_register','Auth\AdminLoginController@vendor_register')->name('admin.register');

      Route::get('/profile', 'AdminController@profile')->name('admin.profile');
      Route::post('/update-profile', 'AdminController@updateProfile')->name('admin.update-profile');
          
      //--------------------------------------Service Category-----------------------------------------------------//
      
      Route::get('/add-service-category',['uses' => 'AdminController@addServiceCategory','as' => 'admincategory.add-service-category']);
      Route::post('/add-service-category',['uses' => 'AdminController@addNewServiceCategory','as' => 'admincategory.add-service-category']);
      Route::get('/view-service-category',['uses' => 'AdminController@viewServiceCategory','as' => 'admincategory.view-service-category']);
      Route::get('/delete-servicesCat/{id}',['uses' => 'AdminController@deleteServiceCategory','as' => 'admincategory.delete-servicesCat']);
      Route::get('/update-servicesCat/{id}',['uses' => 'AdminController@updateServiceCategory','as' => 'admincategory.update-servicesCat']);
      Route::post('/update-servicesCat',['uses' => 'AdminController@updateServiceCatDetails','as' => 'admincategory.update-servicesCat']);
      
      //--------------------------------------Service Category-----------------------------------------------------//
      
      //------------------------------------------Appointment---------------------------------------------------------//
      
      Route::get('/view-appointment',['uses' => 'AdminController@viewAppointment','as' => 'admin.view-appointment']);
      Route::get('/view-appointment-status',['uses' => 'AdminController@viewAppointmentStatus','as' => 'admin.view-appointment-status']);
      Route::get('/update-appointment/{id}',['uses' => 'AdminController@updateAppointment','as' => 'admin.update-appointment']);
      Route::get('/delete-appointment/{id}',['uses' => 'AdminController@deleteAppointment','as' => 'admin.delete-appointment']);
      Route::post('/update-status',['uses' => 'AdminController@updateAppointmentStatus','as' => 'admin.update-status']);
      Route::post('/update-apt-details',['uses' => 'AdminController@updateAppointmentDetails','as' => 'admin.update-apt-details']);


      Route::get('/view-appointment-report',['uses' => 'AdminController@viewAppointmentReport','as' => 'admin.view-appointment-report']);
      Route::get('/view-appointment-status-report',['uses' => 'AdminController@viewAppointmentStatusReport','as' => 'admin.view-appointment-status-report']);
      Route::get('/download-report',['uses' => 'AdminController@downloadReport','as' => 'admin.download-report']);
      Route::get('/download-status-report',['uses' => 'AdminController@downloadStatusReport','as' => 'admin.download-status-report']);
//     Route::get('/downloadReport','AdminController@downloadReport');

    //------------------------------------------Appointment---------------------------------------------------------//
      
      //--------------------------------------------Users---------------------------------------------------------//
      
      Route::get('/view-users',['uses' => 'AdminController@viewUsers','as' => 'admin.view-users']);
      Route::get('/delete-user/{id}',['uses' => 'AdminController@deleteUsers','as' => 'admin.delete-user']);
      Route::get('/update-user/{id}',['uses' => 'AdminController@updateUser','as' => 'admin.update-user']);
      Route::get('/add-users',['uses' => 'AdminController@addNewUsers','as' => 'admin.add-users']);
      Route::post('/user-create',['uses' => 'AdminController@userCreate','as' => 'admin.userCreate']);
      Route::post('/update-user-profile',['uses' => 'AdminController@updateUserProfile','as' => 'admin.update-user-profile']);
      
      Route::get('/verify/{token}', 'AdminController@verifyUser');
       
      
      
      
//      Route::get('/view-users',['uses' => 'AdminController@viewUsers','as' => 'admin.view-users']);
//      Route::get('/add-users',['uses' => 'AdminController@addNewUsers','as' => 'admin.add-users']);
//      Route::post('/user-create',['uses' => 'AdminController@userCreate','as' => 'admin.userCreate']);
//      Route::get('/update-user',['uses' => 'AdminController@updateUser','as' => 'admin.update-user']);
      
      //--------------------------------------------Users---------------------------------------------------------//
      
      //--------------------------------------------Maids---------------------------------------------------------//
      
      Route::get('/view-maids',['uses' => 'AdminController@viewMaids','as' => 'admin.view-maids']);
      Route::get('/add-maids',['uses' => 'AdminController@addNewMaids','as' => 'admin.add-maids']);
      Route::post('/maid-create',['uses' => 'AdminController@MaidCreate','as' => 'admin.maidCreate']);
      Route::get('/update-maid/{id}',['uses' => 'AdminController@updateMaid','as' => 'admin.update-maid']);
      Route::post('/update-maid-profile',['uses' => 'AdminController@updateMaidProfile','as' => 'admin.update-maid-profile']);
      Route::get('/delete-maid/{id}/{user_id}',['uses' => 'AdminController@deleteMaids','as' => 'admin.delete-maid']);
      
      
      //--------------------------------------------Maids---------------------------------------------------------//
      
      
      //--------------------------------------------Setting-----------------------------------------------------------//
      
      Route::get('/setting',['uses' => 'AdminController@updateSetting','as' => 'admin.setting']);
      Route::post('/update-setting',['uses' => 'AdminController@updateSettingDetails','as' => 'admin.update-setting']);
      
      //--------------------------------------------Setting-----------------------------------------------------------//
      
      Route::get('/update-servicesCategory',['uses' => 'AdminController@updateServiceCat','as' => 'admincategory.update-servicesCategory']);
      
});


//------------------------Admin-------------------------------//

