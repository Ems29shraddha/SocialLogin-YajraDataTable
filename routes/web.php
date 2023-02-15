<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SocialAuthController;

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
    return view('project.index');
});
// Route::get('index', function () {
//     return view('project.index');
// });
Route::get('login2', function () {
    return view('project.login');
});
Route::get('signup2', function () {
    return view('project.signup');
});
Auth::routes();

//Google
Route::get('/login-google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('reg', [RegistrationController::class, 'index'])->name('project.reg');
Route::post('reg', [RegistrationController::class, 'save'])->name('project.reg2');

Route::get('list', [RegistrationController::class, 'getCousrseList'])->name('list');

// Route::get('logs', 'LogViewerController@index')->middleware('auth');
