<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\RegistrationController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/redirects', [HomeController::class, 'redirects']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/media', function () {
    return view('user.media');
});

Route::get('/membership', function () {
    return view('user.membership');
});

Route::get('/membershipregistration', function () {
    return view('user.membershipregistration');
});

Route::get('/requirements', function () {
    return view('user.membershiprequirements');
});

Route::get('/categories', function () {
    return view('user.membershipcategories');
});

Route::get('/benefits', function () {
    return view('user.membershipbenefits');
});

Route::get('/membershipregistration', function () {
    return view('user.membershipregistration');
});

Route::get('/members_view', [AdminController::class, 'addview']);

Route::post('/upload_members', [AdminController::class, 'upload']);

Route::get('/home',[AdminController::class, 'home']);

Route::get('/activity', [AdminController::class, 'activity']);

Route::get('/show_registration', [RegistrationController::class, 'showRegistrationForm']);

// Route::post('/submit_form', [RegistrationController::class, 'submitForm']);

Route::post('/submit_form', 'App\Http\Controllers\RegistrationController@submitForm')->name('submit_form');


// Route::get('/registration', 'App\Http\Controllers\RegistrationController@showRegistrationForm')->name('registration');