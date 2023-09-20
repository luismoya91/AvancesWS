<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesOrderController;
use App\Http\Controllers\EmployeeController;

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

Route::resource('products',ProductController::class,[ 'only'=>['index','show'] ]);
Route::resource('salesOrder',SalesOrderController::class,[ 'only'=>['index','show'] ]);
Route::resource('employee',EmployeeController::class,[ 'only'=>['update'] ]);
