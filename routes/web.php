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

/**test routes*/
Route::get('test', 'Auth\RegisterController@test');
Route::get('testQuery','Auth\LoginController@testQuery');

/**end test routes*/

Route::get('getAllPostedEvtens','EventController@getAllEvent');
Route::get('validateEventInscription','EventController@validateEventInscription');

Route::get('main',['as' => 'main', 'uses' => 'Auth\AuthController@home']);

Route::get('message', function () {
    return view('emails/message');
});
Route::get('succ', function () {
    return view('succ');
});

Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contact', ['as' => 'contact', 'uses' => 'MailController@index'] );


Route::get('isValidUserName', 'Auth\LoginController@isValidUserName');


Route::get('createUser' ,'Auth\AuthController@createUser');

// Authentication routes...
Route::get('login', [
    'uses'=>'Auth\LoginController@getLogin',
    'as'=>'login'
]);
Route::post('login', 'Auth\LoginController@postLogin');

Route::get('logout', [
    'uses'=>'Auth\AuthController@getLogout',
    'as'=>'logout'
]);

/*Subscribers*/
Route::get('subscriptionsuccess', [
'uses'=>'Auth\RegisterController@successRegisterMessage',
'as'=>'subscriptionsuccess'
    ]);


Route::get('findUserDataByDocummentNumber','Auth\RegisterController@findUserDataByDocummentNumber');
Route::get('register', [
    'uses'=>'Auth\RegisterController@getRegister',
    'as'=>'register'
]);
Route::post('register', 'Auth\RegisterController@subscriberUser');
Route::get('subscriberConfirmation/{id}', 'Auth\RegisterController@subscribeConfirmation');
/*End Subscriber*/

/*Role*/
Route::post('role/create', ['as'=>'createRole','uses'=>'Role\RoleController@postRegister' ]);
Route::get('role/create','Role\RoleController@getRegister');
/*End Role*/

// Password reset link request routes...
Route::get('forgotPassword', 'Auth\PasswordController@getEmail');
Route::get('recoveryPasswordView',[
'uses'=>'Auth\PasswordController@recoveryPasswordView',
'as'=>'recoveryPasswordView'
    ]);

Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('auth/confirm/email/{email}/confirm_token/{confirm_token}', 'Auth\AuthController@confirmRegister');


/*Navigation Option*/
Route::get('nav/edit', function () {
    return view('navigationOption/editView');
});
/*webPage routes*/


Route::get('index', [
    'uses'=>'Auth\AuthController@getIndex',
    'as'=>'index'
]);
Route::get('/', [
    'uses'=>'Auth\AuthController@getIndex',
    'as'=>'index'
]);

Route::get('main', function () {
    return view('webPage.main');
});
Route::get('inscription', function () {
    return view('webPage.race');
});
Route::get('contactus', function () {
    return view('webPage.contactus');
});
Route::get('schedule', function () {
    return view('webPage.schedule');
});
Route::get('byLaw', function () {
    return view('webPage.byLaw');
});
Route::get('gallery', function () {
    return view('webPage.gallery');
});
Route::get('subscribe', function () {
    return view('webPage.subscribe');
});
Route::get('promo-video', function () {
    return view('webPage.promo-video');
});
Route::get('wishlist', function () {
    return view('webPage.wishlist');
});
Route::get('blog', function () {
    return view('webPage.blog');
});
Route::get('blog-detail', function () {
    return view('webPage.blog-detail');
});
Route::get('about-us', function () {
    return view('webPage.about-us');
});
Route::get('information', function () {
    return view('webPage.information');
});

Route::get('checkout', [
    'uses'=>'PayController@getCheckoutPage',
    'as'=>'checkout'
]);
Route::post('payTicket', [
    'uses'=>'UserDataPayController@payTicketByUsers',
    'as'=>'payTicket'
]);
Route::get('payTicketSuccess', [
    'uses'=>'UserDataPayController@payTicketSuccess',
    'as'=>'payTicketSuccess'
]);


Route::get('checkout/{id}', 'PayController@checkoutAccess');
Route::get('getCostByEvent','CostController@costByEvent');
Route::get('my-account', function () {
    return view('webPage.my-account');
});
Route::get('products-single', function () {
    return view('webPage.products-single');
});
Route::get('shop', function () {
    return view('webPage.shop');
});


