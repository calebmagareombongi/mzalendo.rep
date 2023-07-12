<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





/* test lines*/

Route::get('billing', function () {
    return view('billing');
})->name('billing');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('rtl', function () {
    return view('rtl');
})->name('rtl');

Route::get('user-management', function () {
    return view('laravel-examples/user-management');
})->name('user-management');

Route::get('tables', function () {
    return view('tables');
})->name('tables');

Route::get('virtual-reality', function () {
    return view('virtual-reality');
})->name('virtual-reality');

Route::get('static-sign-in', function () {
    return view('static-sign-in');
})->name('sign-in');

Route::get('static-sign-up', function () {
    return view('static-sign-up');
})->name('sign-up');

Route::get('/logout', [SessionsController::class, 'destroy']);
Route::get('/user-profile', [InfoUserController::class, 'create']);
Route::post('/user-profile', [InfoUserController::class, 'store']);
Route::get('/login', function () {
    return view('dashboard');
})->name('sign-up');
/* end of test lines*/

Route::middleware('auth')->prefix('caleb')->name('caleb.')->group(function () {
    Route::get('job/create', [\App\Http\Controllers\Auth\JobController::class, 'create'])->name('job_create');
    Route::post('job', [\App\Http\Controllers\Auth\JobController::class, 'store'])->name('job_store');
    Route::get('job/{job}', [\App\Http\Controllers\Auth\JobController::class, 'show'])->name('job_show');
    Route::get('job/{job}/edit', [\App\Http\Controllers\Auth\JobController::class, 'edit'])->name('job_edit');
    Route::put('job/{job}', [\App\Http\Controllers\Auth\JobController::class, 'update'])->name('job_update');
    Route::delete('job/{job}', [\App\Http\Controllers\Auth\JobController::class, 'destroy'])->name('job_destroy');
    Route::get('job', [\App\Http\Controllers\Auth\JobController::class, 'index'])->name('job_index');
});




require __DIR__.'/auth.php';
