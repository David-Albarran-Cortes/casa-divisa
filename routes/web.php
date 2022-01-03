<?php
use App\Models\User;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;
use App\Http\Controllers\showPost;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SmsMsgController;
 

Route::get('/', function () {
    return view('welcome');
});
 

Route::get('login/facebook', [LoginController::class, 'redirect']);

Route::get('login/facebook/callback', [LoginController::class, 'signinFacebook']);


Route::get('auth/google', [LoginController::class, 'redirectGoogle']);

Route::get('auth/google/callback', [LoginController::class, 'signinGoogle']);


Route::get('send-sms-message', [SmsMsgController::class, 'sendSmsToMobile']);

Route::get('/nosotros', function () {
    return view('nosotros.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', ShowPosts::class)->name('dashboard');

 

Route::middleware(['auth:sanctum', 'verified'])->get('/suscripciones', function () {
    return view('suscripciones');
})->name('suscripciones');
