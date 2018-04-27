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



 /*Route::get('/', function () {
    return view('pages/dashboard');
}); */


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', function () {
    return view('pages/dashboard');
});
Route::get('/cagegory', [
    'uses' => 'CategoryController@index',
    'as' => 'add.category'
]);
Route::post('/cagegory', [
    'uses' => 'CategoryController@store',
    'as' => 'save.category'
]);
Route::get('/manage-cagegory', [
    'uses' => 'CategoryController@manage',
    'as' => 'manage.category'
]);

Route::get('/edit-category/{id}', [
    'uses' => 'CategoryController@edit',
    'as' => 'category.edit'
]);
Route::post('/update-category', [
    'uses' => 'CategoryController@update',
    'as' =>'category.update'
]);
Route::get('/delete-category/{id}', [
    'uses' => 'CategoryController@destroy',
    'as' =>'category.delete'
]);
