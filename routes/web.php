<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/zforce1000sportr', [FrontendController::class, 'zforce1000sportr'])->name('zforce1000sportr');
Route::get('/productdetails', [FrontendController::class, 'productdetails'])->name('productdetails');



Route::group(['middleware' => ['auth','web']], function () {

    Route::get('/account', [FrontendController::class, 'account'])->name('account');

    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
});

include_once('admin.php');
