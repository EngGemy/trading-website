<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FraudulentCompaniesController;
use App\Http\Controllers\Front\DetailsController;
use App\Http\Controllers\Front\RatingController;
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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/search', [\App\Http\Controllers\Front\HomeController::class, 'search'])->name('search');

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('fraudulent-companies.index');
//Route::get('/details', [FraudulentCompaniesController::class, 'details'])->name('fraudulent-companies.index');


//Route::get('/fraudulent-companies', [FraudulentCompaniesController::class, 'index'])->name('fraudulent-companies.index');

Route::get('/company/{id}', [FraudulentCompaniesController::class, 'show'])->name('fraudulent-companies.show');
Route::get('/trusted-companies', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');
Route::get('/trustedAll', [\App\Http\Controllers\Front\TrustedCompanyController::class, 'indexAll'])->name('fraudulent-companies.indexAll');
Route::get('/fraud-reports', [\App\Http\Controllers\Front\FraudReportController::class, 'index'])->name('fraud-reports.index');
Route::post('/fraud-reports', [\App\Http\Controllers\Front\FraudReportController::class, 'store'])->name('fraud-reports.store');
//Route::post('/help2', [\App\Http\Controllers\Front\FraudReportController::class, 'help2'])->name('fraud-report.help2');
//Route::post('/contact', [\App\Http\Controllers\Front\FraudReportController::class, 'contact'])->name('fraud-report.contact');
Route::post('/fraud-report/contact/{fraud_report_id}', [\App\Http\Controllers\Front\ContactHelpController::class, 'store'])->name('fraud-report.contact');


Route::get('/trading-companies/{companyNameId}', 'App\Http\Controllers\Front\DetailsController@show')->name('details.show');

Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');
Route::get('/comments/{companyNameId}', [RatingController::class, 'showComments'])->name('comments.show');
Route::post('/contact-form', [\App\Http\Controllers\Front\ContactFormController::class, 'store'])->name('contact-form.store');

Route::view('/contact','contact')->name('contact.view');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
