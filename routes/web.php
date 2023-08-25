<?php

use App\Models\Member;
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
})->name('dashboard');


Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', fn () => view('auth.login'))->name('login');
    Route::get('register', fn () => view('auth.register'))->name('register');
});

Route::name('master.')->group(function () {
    Route::prefix('church')->name('church.')->group(function () {
        Route::get('', fn () => view('master.church.index'))->name('index');
        Route::get('create', fn () => view('master.church.create'))->name('create');
    });
});


Route::get("/test", fn () => dd(Member::get()->toArray()));
