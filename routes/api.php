<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// V1
// Route::prefix('v1')->name('v1.')->group(function () {
//     // Admin
//     Route::prefix('admin')->name('admin.')->group(function () {

//     });
//     // Customer
//     Route::prefix('customer')->name('customer.')->group(function () {
//         Route::post('/create', [CustomerController::class, 'create'])->name('create');
//     });
// });

Route::post('/store', [AdminController::class, 'store']);