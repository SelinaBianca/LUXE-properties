<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseCategoryController;


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


Route::resource("/housecategories", HouseCategoryController::class);

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

   

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class
    );
});


Route::resource("/housecategories", HouseCategoryController::class);

//Route::get('admin/housecategories', 'HouseCategoryController@index')->name('admin.housecategories.index');




Route::delete('/housecategories/{id}', 'HouseCategoryController@destroy')->name('housecategories.destroy');
