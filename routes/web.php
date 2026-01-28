<?php

use Illuminate\Support\Facades\Route;

// Frontend
use App\Http\Controllers\Frontend\FrontendController;

// Auth
use App\Http\Controllers\Auth\AuthController;

// Backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CompleteCountController;
use App\Http\Controllers\Backend\SocialLinkController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SectionHeroController;
use App\Http\Controllers\Backend\SectionAboutController;
use App\Http\Controllers\Backend\HeaderController;

/*
|--------------------------------------------------------------------------
| FRONTEND / PUBLIC ROUTES
|--------------------------------------------------------------------------
*/
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');

    Route::get('/produk', 'produk')->name('produk');
    Route::get('/produk/{slug}', 'produkShow')->name('produk.show');

    Route::get('/blog', 'blog')->name('blog');
    Route::get('/testimoni', 'testimoni')->name('testimoni');
    Route::get('/tentang', 'tentang')->name('tentang');
    Route::get('/portfolio', 'portfolio')->name('portfolio');

    Route::get('/kontak', 'kontak')->name('kontak');
    Route::post('/kontak', 'submitKontak')->name('kontak.submit');
});

    // Route untuk halaman hero section
    Route::get('/hero-section', function () {
        return view('hero-section');
    });

    // Route untuk halaman about section
    Route::get('/about-section', function () {
        return view('about-section');
    });

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::prefix('cihuy')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| BACKEND / ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('bagoosh')->name('backend.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('brands', BrandController::class);
    Route::resource('complete-count', CompleteCountController::class);
    Route::resource('social-links', SocialLinkController::class);
    Route::resource('footer', FooterController::class);
    Route::resource('users', UserController::class);
    Route::resource('section-hero', SectionHeroController::class);
    Route::resource('section-about', SectionAboutController::class);
    Route::resource('header', HeaderController::class);
});
