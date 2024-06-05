<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseCategoryController;
use App\Http\Controllers;
use app\Http\Controllers\FilamentController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\AnalyticsController;
use App\Enums\Role;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;




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
    return view('home');
});

Route::get('/properties', function () {
    return view('properties');
})->name('properties');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::resource("/housecategories", HouseCategoryController::class);
Route::resource('apartments', ApartmentController::class);
Route::get('properties', [ApartmentController::class, 'properties'])->name('properties');


// routes/web.php
Route::resource('categories', CategoryController::class);
Route::resource('agents', AgentController::class);



Route::get('/properties', [ApartmentController::class, 'showProperties'])->name('properties');


// Route::get('hello', function () {
//     return view('hello', [
//         'name' => 'Taylor',
//         'age' => 30,
//         'address' => 'Hà Nội'
//     ]);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


//   // Route::get('/admin', [FilamentController::class, 'index'])->name('filament.dashboard');
//    Route::get('/admin/dashboard', [FilamentController::class, 'dashboard'])->name('filament.admin.pages.dashboard');




    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class);
});


Route::get('/paypal-test-checkout', [PayPalController::class, 'createTransaction'])->name('paypal.test_checkout');
Route::post('/paypal-test-process', [PayPalController::class, 'processTransaction'])->name('paypal.process_transaction');
Route::get('/paypal-test-success', [PayPalController::class, 'captureTransaction'])->name('paypal.capture_transaction');


Route::get('/statistics', [AnalyticsController::class, 'index'])->name('statistics');

Route::get('/apartment.show', function () {
    return view('map');
});



//Route::get('/properties', [ApartmentController::class, 'showProperties']);


Route::get('/properties', [ApartmentController::class, 'showProperties'])->name('properties');




Route::get('/apartments', [ApartmentController::class, 'index'])->name('apartments.index');
Route::get('/apartments/{apartment}', [ApartmentController::class, 'show'])->name('apartments.show');

Route::get('/properties/search', 'App\Http\Controllers\ApartmentController@search')->name('properties.search');










//
//Route::middleware(['role:' . Role::SuperAdministrator->value])->group(function () {
//    Route::get('/admin/dashboard', function () {
//        // Super Administrator specific routes
//        return view('admin.dashboard');
//    })->name('admin.dashboard');
//});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
