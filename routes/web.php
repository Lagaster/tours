<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/',[PageController::class,'index']);
Route::get('/maraflight',[PageController::class,'maraflight'])->name('maraflight');
Route::get('/pictorials',[PageController::class,'pictorials'])->name('pictorials');
Route::get('/theark',[PageController::class,'theark'])->name('theark');
Route::get('maracamp',[PageController::class,'maraleisurecamp'])->name('maracamp');
Route::get('aberdareclub',[PageController::class,'theaberdareclub'])->name('aberdareclub');
