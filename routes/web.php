<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[DashboardController::class,'login']);
Route::post('/auth',[DashboardController::class,'auth']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::post('/simpanberita',[DashboardController::class,'store']);
Route::post('/simpanperbaikan',[DashboardController::class,'storeperbaikan']);
Route::post('/simpantanaman',[DashboardController::class,'storetanaman']);
Route::get('hapusberita/{id}',[DashboardController::class,'delete']);
Route::get('hapustanaman/{id}',[DashboardController::class,'deletetanaman']);
Route::get('hapusperbaikan/{id}',[DashboardController::class,'deleteperbaikan']);
Route::post('edittanaman/{id}',[DashboardController::class,'updatetanaman']);
Route::post('editperbaikan/{id}',[DashboardController::class,'updateperbaikan']);
Route::post('editberita/{id}',[DashboardController::class,'updateberita']);
Route::patch('updateimage/{id}', [DashboardController::class,'updateimage']);
