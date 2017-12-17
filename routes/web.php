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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
   'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('about',[
    'as'=>'gioi-thieu',
     'uses'=>'PageController@getAbout'
 ]);

 Route::get('product',[
    'as'=>'san-pham',
     'uses'=>'PageController@getProduct'
 ]);

 Route::get('contact',[
    'as'=>'lien-he',
     'uses'=>'PageController@getContact'
 ]);

 Route::get('type',[
    'as'=>'loai-sanpham',
     'uses'=>'PageController@getProductType'
 ]);
 

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
