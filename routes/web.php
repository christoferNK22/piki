<?php

use App\Http\Controllers\GantiPasswordController;
use App\Livewire\Admin\Auth\Login;
use App\Livewire\Member\Auth\Register;
use App\Livewire\Admin\Church\ChurchIndex;
use App\Livewire\Admin\Church\ChurchCreate;
use App\Livewire\Admin\Church\ChurchEdit;
use App\Livewire\Admin\CMS\Agenda as AgendaIndex;
use App\Livewire\Admin\CMS\ContactInformation as ContactInformationIndex;
use App\Livewire\Admin\CMS\Management as ManagementIndex;
use App\Livewire\Admin\CMS\News as NewsIndex;
use App\Livewire\Admin\CMS\Profile as ProfileIndex;
use App\Livewire\Admin\CMS\VisiMisi as VisiMisiIndex;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Member\Dashboard as MemberDashboard;
use App\Livewire\Landing\Dashboard as LandingDashboard;
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


Route::get('/', LandingDashboard::class)->name('home');

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
        Route::name('cms.')->group(function () {
            Route::prefix('contact_information')->name('contact_information.')->group(function () {
                Route::get('', ContactInformationIndex::class)->name('index');
            });
            Route::prefix('profile')->name('profile.')->group(function () {
                Route::get('', ProfileIndex::class)->name('index');
            });
            Route::prefix('berita')->name('berita.')->group(function () {
                Route::get('', NewsIndex::class)->name('index');
            });
            Route::prefix('agenda')->name('agenda.')->group(function () {
                Route::get('', AgendaIndex::class)->name('index');
            });
            Route::prefix('pengurus')->name('pengurus.')->group(function () {
                Route::get('', ManagementIndex::class)->name('index');
            });
            Route::prefix('visi_misi')->name('visi_misi.')->group(function () {
                Route::get('', VisiMisiIndex::class)->name('index');
            });
        });
    });
});

Route::prefix("member/")->name('member.')->group(function () {
    Route::middleware('role:member')->group(function () {
        Route::get('/', MemberDashboard::class)->name('dashboard');
        Route::get('logout', function () {
            auth('member')->logout();
            return redirect(route('member.login'));
        })->name('logout');
        Route::post('/ganti_password', GantiPasswordController::class)->name('gantiPassword');
    });
    Route::get('register', Register::class)->name('register');
    Route::get('login', AuthLogin::class)->name('login');
});
