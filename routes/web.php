<?php

use App\Livewire\Admin\Auth\Login;
use App\Livewire\Admin\Church\ChurchIndex;
use App\Livewire\Admin\Church\ChurchCreate;
use App\Livewire\Admin\Church\ChurchEdit;
use App\Livewire\Admin\Dashboard;
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

Route::get('/home', function () {
    return view('home.beranda');
})->name('beranda');

Route::prefix('home')->name('home.')->group(function () {
    Route::get('beranda', fn () => view('home.beranda'))->name('beranda');
    Route::get('member', fn () => view('home.member'))->name('member');
});

Route::prefix('admin/')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::middleware('auth')->group(function () {
        Route::get("", Dashboard::class)->name('dashboard');
        Route::name('master.')->group(function () {
            Route::prefix('church')->name('church.')->group(function () {
                Route::get('', ChurchIndex::class)->name('index');
                Route::get('create', ChurchCreate::class)->name('create');
                Route::get('edit/{id}', ChurchEdit::class)->name('edit');
            });
            Route::prefix('interest')->name('interest.')->group(function () {
                Route::get('', fn () => view('master.interest.index'))->name('index');
                Route::get('create', fn () => view('master.interest.create'))->name('create');
            });
            Route::prefix('education')->name('education.')->group(function () {
                Route::get('', fn () => view('master.education.index'))->name('index');
                Route::get('create', fn () => view('master.education.create'))->name('create');
            });
            Route::prefix('admin')->name('admin.')->group(function () {
                Route::get('', fn () => view('master.admin.index'))->name('index');
                Route::get('create', fn () => view('master.admin.create'))->name('create');
            });
        });
    });
});

Route::name('mainPage.')->group(function () {
    Route::prefix('member')->name('member.')->group(function () {
        Route::get('', fn () => view('mainPage.member.index'))->name('index');
        Route::get('create', fn () => view('mainPage.member.create'))->name('create');
        Route::get('detail', fn () => view('mainPage.member.detail'))->name('detail');
    });
});

Route::get("/test", fn () => dd(Member::get()->toArray()));
