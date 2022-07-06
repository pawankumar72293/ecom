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

/*
Route::get('/', function () {
    return view('welcome');
});*/

// Category routes
Route::get('/','CategoryController@dashboard')->name('dashboard');
Route::get('add-category','CategoryController@add')->name('addcategory');
Route::post('save-category','CategoryController@insert')->name('saveCategory');

Route::get('category-list','CategoryController@list')->name('categoryList');
Route::post('category-list','CategoryController@list')->name('categoryList');

Route::get('edit-category/{id}','CategoryController@edit')->name('editCategory');
Route::post('update-category/{id}','CategoryController@update')->name('updateCategory');
Route::get('delete-category/{id}','CategoryController@delete')->name('removeCategory');
Route::delete('deleteCategory','CategoryController@deleteCheckedStudents')->name('removeCategoryall');



Route::get('ajax-category','TaskController@ajax')->name('ajaxcategory');
Route::post('save-task','TaskController@insert')->name('savetask');

//category deleted route
Route::get('deleted-category-list','CategoryController@deletedList')->name('deletedCategoryList');
Route::get('restore-category/{id}','CategoryController@restore')->name('restoreCategory');
Route::get('permanent-remove-category/{id}','CategoryController@permanentDelete')->name('permanentDltCategory');

//register add
Route::get('register-category','loginController@register')->name('addRegister');
Route::post('save-register','loginController@added')->name('saveRegister');

//login
Route::get('login-form','loginController@login')->name('loginForm');