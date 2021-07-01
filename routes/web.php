<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController, UserController};

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


// for login
Route::get('login',[AuthController::class, 'loginPage'])->name('login');
Route::post('login',[AuthController::class, 'authenticate']);


// for signup
Route::get('signup',[AuthController::class, 'signupPage']);
Route::post('signup',[AuthController::class, 'signup']);


    
    
    // csv upload
    Route::post('upload-csv',[UserController::class, 'upload_csv']);
    Route::get('user/list',[UserController::class, 'users_list']);

    Route::middleware('auth')->group(function () {

        //dashboard
        Route::get('/admin',[AuthController::class, 'admin']);

        // for logout user
        Route::post('logout', [UserController::class, 'logout'])->name('logout');
    
    });

