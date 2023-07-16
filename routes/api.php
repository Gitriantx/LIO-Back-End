<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('jwt.verify')->get('test', function (Request $request) {
    return "succes";
});
Route::post('register', [AuthController::class, 'register']);
Route::post('verifyCode', [AuthController::class, 'verifyCode']);
Route::post('resendCode', [AuthController::class, 'resendCode']);
Route::post('registerNext', [AuthController::class, 'registerNext']);
//login
Route::post('login', [AuthController::class, 'login']);
