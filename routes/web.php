<?php


use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\EditorController;
use App\Http\Livewire\Admin\Post;
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
// livewire
Route::get('/admin/post', Post::class)->name('post');

Route::controller(EditorController::class)->group(function(){
        Route::post('/create','store');
        Route::post('/upload','uploadimage')->name('ckeditor.upload');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
