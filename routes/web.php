<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    
    return redirect('/login');
}); 

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => 'role:1', 'prefix' => 'admin'], function () {
    Route::resource('jobs','App\Http\Controllers\Admin\JobController')->names('admin.jobs');
    Route::get('/home', 'App\Http\Controllers\Admin\HomeController@index')->name('admin.home');
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('admin.home');
    Route::get('applicant/{id}', 'App\Http\Controllers\Admin\JobController@applicant')->name('admin.applicant');


});

Route::group(['middleware' => 'role:2'], function () {
    Route::resource('jobs','App\Http\Controllers\jobController')->names('jobs');
    Route::post('jobs-apply/{id}','App\Http\Controllers\jobController@jobApply')->name('jobs.jobApply');
    
});

