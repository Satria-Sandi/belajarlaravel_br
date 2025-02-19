<?php

use App\Http\Controllers\CourtTypeController;
use App\Http\Controllers\CourtController;
use Illuminate\Support\Facades\Route;

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


// Route::get('/Admin', function(){
//     return view('Master Project');
// });

// Route::get('/AM', function(){
//     return view('MasterProject');
// });

// Route::get('/MasterProject', function(){
//     return view('mprojec');
// });

// //tugas//
// Route::get('/Home', function(){
//     return view('Home');
// });

// Route::get('/Master Project', function(){
//     return view('Master Project');
// });

// Route::get('/Master Service', function(){
//     return view('Master Service');
// });

Route::get('/court-type', [CourtTypeController::class, 'index']);
Route::post('/court', [CourtTypeController::class, 'store']);

Route::resource('court', CourtController::class);

