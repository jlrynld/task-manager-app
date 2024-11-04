<?php

use Illuminate\Support\Facades\Route;


Route::get('', [SignInController::class, 'index'])->name('signup');

Route::middleware('guest')->group(function () {
    Route::get('/sign-up', [SignUpController::class, 'index'])->name('sign-up.index');
    Route::post('/sign-up-post', [SignUpController::class, 'signUp'])->name('sign-up');

    Route::get('/sign-in', [SignInController::class, 'index'])->name('sign-in.index');
    Route::post('/sign-in-post', [SignInController::class, 'signIn'])->name('sign-in');
});



Route::middleware('auth')->group(function () {


});
