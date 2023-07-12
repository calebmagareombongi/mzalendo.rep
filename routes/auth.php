<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
                Route::middleware('auth')->prefix('auth')->group(function () {
                    Route::get('create', [\App\Http\Controllers\Auth\ProjectController::class, 'create'])->name('auth.create');
                    Route::post('', [\App\Http\Controllers\Auth\ProjectController::class, 'store'])->name('auth.store');
                    Route::get('{project}', [\App\Http\Controllers\Auth\ProjectController::class, 'show'])->name('auth.show');
                    Route::match(['get', 'put'], '/{project}/edit', [\App\Http\Controllers\Auth\ProjectController::class, 'edit'])->name('auth.edit');
                    Route::put('/{project}', [\App\Http\Controllers\Auth\ProjectController::class, 'update'])->name('auth.update');
                    Route::delete('{project}', [\App\Http\Controllers\Auth\ProjectController::class, 'destroy'])->name('auth.destroy');
                    Route::get('', [\App\Http\Controllers\Auth\ProjectController::class, 'index'])->name('auth.index');
                });

                Route::middleware('auth')->prefix('caleb')->name('caleb.')->group(function () {
                    Route::get('job/create', [\App\Http\Controllers\Auth\JobController::class, 'create'])->name('job_create');
                    Route::post('job', [\App\Http\Controllers\Auth\JobController::class, 'store'])->name('job_store');
                    Route::get('job/{job}', [\App\Http\Controllers\Auth\JobController::class, 'show'])->name('job_show');
                    Route::get('job/{job}/edit', [\App\Http\Controllers\Auth\JobController::class, 'edit'])->name('job_edit');
                    Route::put('job/{job}', [\App\Http\Controllers\Auth\JobController::class, 'update'])->name('job_update');
                    Route::delete('job/{job}', [\App\Http\Controllers\Auth\JobController::class, 'destroy'])->name('job_destroy');
                    Route::get('job', [\App\Http\Controllers\Auth\JobController::class, 'index'])->name('job_index');
                });
                
                Route::middleware('auth')->prefix('ashir')->name('ashir.')->group(function () {
                    Route::get('announcement/create', [\App\Http\Controllers\Auth\announcementscontroller::class, 'create'])->name('announcement_create');
                    Route::post('announcement', [\App\Http\Controllers\Auth\announcementscontroller::class, 'store'])->name('announcement_store');
                    Route::get('announcement/{announcement}', [\App\Http\Controllers\Auth\announcementscontroller::class, 'show'])->name('announcement_show');
                    Route::get('announcement/{announcement}/edit', [\App\Http\Controllers\Auth\announcementscontroller::class, 'edit'])->name('announcement_edit');
                    Route::put('announcement/{announcement}', [\App\Http\Controllers\Auth\announcementscontroller::class, 'update'])->name('announcement_update');
                    Route::delete('announcement/{announcement}', [\App\Http\Controllers\Auth\announcementscontroller::class, 'destroy'])->name('announcement_destroy');
                    Route::get('announcement', [\App\Http\Controllers\Auth\announcementscontroller::class, 'index'])->name('announcement_index');
                });
                
                
                
                
               
            