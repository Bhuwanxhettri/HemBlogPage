<?php


use App\Http\Controllers\AdminLoginController;
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
    return view('welcome');
});


// Admin login Route 😊😀😊
Route::controller(AdminLoginController::class)->group(function () {

    Route::any('/admin', 'adminLogin');
    Route::any('/adminloginSystem', 'adminloginSystem')->name('adminloginSystem');

    Route::get('/adminDashboard','admindashboard')->middleware('IsLogin');

    Route::get('/adminlogout','adminlogout');


});