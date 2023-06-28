<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/new-login', function () {
    return view('users.login1');
});
Route::get('/', function () {
    return view('users.login');
})->name('login');
Route::get('logout', function () {
    session()->flush();
    Auth::logout();
    return redirect('/');
});
Route::get('/insert', [UsersController::class,'UserInsert']);

Route::get('register',[UsersController::class,'index'])->name('register');

Route::post('/userlogin', [UsersController::class,'loginUser'])->name('login-user');

/* Gmail Login */
Route::get('/gmail-login', [UsersController::class,'gmailLogin'])->name('gmail-login');
Route::get('/gmail-login-callback', [UsersController::class,'gmailCallBack'])->name('gmail-login-callback');

/* Facebook Login */
Route::get('/facebook-login', [UsersController::class,'facebookLogin'])->name('facebook-login');
Route::get('/facebook-login-callback', [UsersController::class,'facebookCallBack'])->name('facebook-login-callback');

/* LinkedIn Login */
Route::get('/linkedin-login', [UsersController::class,'linkedinLogin'])->name('linkedin-login');
Route::get('/linkedin-login-callback', [UsersController::class,'linkedinCallBack'])->name('linkedin-login-callback');

/* Microsoft Login */
Route::get('/microsoft-login', [UsersController::class,'microsoftLogin'])->name('microsoft-login');
Route::get('/microsoft-login-callback', [UsersController::class,'microsoftCallBack'])->name('microsoft-login-callback');


Route::get('refresh_captcha', [UsersController::class,'refreshCaptcha'])->name('refresh_captcha');
