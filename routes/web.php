<?php

use App\Http\Controllers\CompaniesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->name('home');

Route::get('/list-companies', function () {
    return view('file.list_companies');
})->name('list-companies');

Route::get('/list-employee', function () {
    return view('file.list_employee');
})->name('list-employee');

Route::get('/detail-companies', function () {
    return view('file.detail_companies');
})->name('detail-companies');

Route::get('/detail-employee', function () {
    return view('file.detail_employee');
})->name('detail-employee');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/upload-employee', function () {
        return view('file.upload_employee');
    })->name('upload-employee');

    Route::post('upload-employee', 'EmployeeController@create');

    Route::get('/list-employee', 'EmployeeController@get_list_employee')->name('list-employee');
    Route::get('/detail-employee/{id}', 'EmployeeController@get_employee')->name('detail-employee');
    Route::post('update_employee', 'EmployeeController@update')->name('update_employee');
    Route::post('delete_employee', 'EmployeeController@delete')->name('delete_employee');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/upload-companies', function () {
        return view('file.upload_companies');
    })->name('upload-companies');

    Route::post('upload-companies', 'CompaniesController@create');

    Route::get('/list-companies', 'CompaniesController@get_list_companies')->name('list-companies');
    Route::get('/detail-companies/{id}', 'CompaniesController@get_companies')->name('detail-companies');
    Route::post('update_companies', 'CompaniesController@update')->name('update_companies');
    Route::get('delete_companies', 'CompaniesController@delete')->name('delete_companies');
});

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
