<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('/');


Route::controller(Authentication::class)->middleware(['gAdmin', 'guest'])->group(function () {
    Route::get('login', 'Login')->name('login');
    Route::post('login', 'PostLogin')->name('PostLogin');
    Route::get('register', 'Register');
    Route::post('register', 'PostRegister')->name('PostRegister');
});

Route::controller(Authentication::class)->middleware('auth:web')->group(function () {
    Route::get('home', 'Home')->name('home');
    Route::get('logout', 'Logout')->name('logout');
    //Tambahin route yang ingin di lindungin disini!!
});

Route::prefix('admin')->group(function () {

    Route::controller(AdminController::class)->middleware(['gAdmin', 'guest'])->group(function () {
        Route::redirect('/', 'admin/login');
        Route::get('login', 'Login')->name('admin.login');
        Route::post('login', 'PostLogin')->name('admin.PostLogin');
    });

    Route::controller(AdminController::class)->middleware('auth:admin')->group(function () {
        Route::get('home', 'Home')->name('admin.home');
        Route::get('logout', 'Logout')->name('Admin.logout');
        //Tambahin route yang ingin di lindungin disini!!
    });
});
