<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(['prefix'=>LaravelLocalization::setLocale()],function (){
    Route::get('/', 'Admin\DashboardController@index');
});


//Route::get('/', function () {
////    return view('admin.index');
////});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
    'namespace' => 'Admin',
    'as' =>'admin.'
],function (){
    Route::group(['prefix' => 'admin',
    ],function (){
        Route::resource('products','ProductController');
    });

});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
    'namespace' => 'Admin',
    'as' =>'admin.'
],function (){
    Route::group(['prefix' => 'admin',
    ],function (){
        Route::resource('suppliers','SupplierController');
    });

});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
    'namespace' => 'Admin',
    'as' =>'admin.'
],function (){
    Route::group(['prefix' => 'admin',
    ],function (){
        Route::resource('materialInvoices','MaterialInvoiceController');
    });

});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
    'namespace' => 'Admin',
    'as' =>'admin.'
],function (){
    Route::group(['prefix' => 'admin',
    ],function (){
        Route::resource('makers','MaterialInvoiceController');
    });

});





Route::group([
    'prefix' => '/admin',
    'namespace' => 'Admin',
    'as' =>'admin.'
],function (){
    Route::resource('dashboard','DashboardController');
});
