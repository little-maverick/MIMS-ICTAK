<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\CertificateController;

use App\Http\Controllers\MpesaController;

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

Route::post('/submit_form', 'App\Http\Controllers\RegistrationController@submitForm')->name('submit_form');




Route::get('/generate-certificate/{userId}', [CertificateController::class, 'generateCertificate']);


Route::get('/admin/certificate', 'App\Http\Controllers\CertificateController@index')->name('admin.certificate');

Route::post('/store_certificates', [CertificateController::class, 'store']);

Route::get('/admin/certificate', [CertificateController::class, 'index']);

Route::get('/download_certificate/{id}', 'App\Http\Controllers\CertificateController@showDownloadCertificate')->name('downloadcertificate');

Route::get('/download_certificate/{id}', [CertificateController::class, 'showDownloadCertificate']);




Route::post('/access_token', [MpesaController::class, 'generateAccessToken']);

Route::get('/payment', [MpesaController::class, 'showMpesa'])->name('showPaymentPage');

Route::post('/process_payment', [MpesaController::class, 'STKPush'])->name('processPayment');

Route::get('/payment_status', [MpesaController::class, 'query'])->name('paymentStatus');





