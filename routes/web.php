<?php

use App\Livewire\Admin\Auth\Login;
use App\Livewire\Member\Auth\Register;
use App\Livewire\Admin\Church\ChurchIndex;
use App\Livewire\Admin\Church\ChurchCreate;
use App\Livewire\Admin\Church\ChurchEdit;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Member\Dashboard as MemberDashboard;
use App\Livewire\Admin\Education\EducationIndex;
use App\Livewire\Admin\Education\EducationCreate;
use App\Livewire\Admin\Education\EducationEdit;
use App\Livewire\Admin\Interest\InterestIndex;
use App\Livewire\Admin\Interest\InterestCreate;
use App\Livewire\Admin\Interest\InterestEdit;
use App\Livewire\Admin\Member\MemberIndex;
use App\Livewire\Admin\Member\MemberCreate;
use App\Livewire\Admin\Member\MemberEdit;
use App\Livewire\Member\Auth\Login as AuthLogin;
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
    return view('livewire.landing.beranda');
})->name('home');

Route::name('landing.')->group(function () {
    Route::prefix('beranda')->name('beranda.')->group(function () {
        Route::get('news-video', function () {
            return view('livewire.landing.news-video');
        })->name('news-video');
    });
});

Route::prefix('admin/')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::middleware('auth', 'role:web')->group(function () {
        Route::get('logout', function () {
            auth('web')->logout();
            return redirect(route('login'));
        })->name('logout');
        Route::get("", Dashboard::class)->name('dashboard');
        Route::name('master.')->group(function () {
            Route::prefix('church')->name('church.')->group(function () {
                Route::get('', ChurchIndex::class)->name('index');
                Route::get('create', ChurchCreate::class)->name('create');
                Route::get('edit/{id}', ChurchEdit::class)->name('edit');
            });
            Route::prefix('interest')->name('interest.')->group(function () {
                Route::get('', InterestIndex::class)->name('index');
                Route::get('create', InterestCreate::class)->name('create');
                Route::get('edit/{id}', InterestEdit::class)->name('edit');
            });
            Route::prefix('education')->name('education.')->group(function () {
                Route::get('', EducationIndex::class)->name('index');
                Route::get('create', EducationCreate::class)->name('create');
                Route::get('edit/{id}', EducationEdit::class)->name('edit');
            });
            Route::prefix('member')->name('member.')->group(function () {
                Route::get('', MemberIndex::class)->name('index');
                Route::get('create', MemberCreate::class)->name('create');
                Route::get('edit/{id}', MemberEdit::class)->name('edit');
            });
        });
    });
});

Route::prefix("member/")->name('member.')->group(function () {
    Route::get('register', Register::class)->name('register');
    Route::get('login', AuthLogin::class)->name('login');
    Route::get('/', MemberDashboard::class)->middleware('role:member')->name('dashboard');
    Route::get('logout', function () {
        auth('member')->logout();
        return redirect(route('member.login'));
    })->name('logout');
});
