<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasslockController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// passlock app
Route::get('/dashboard/formlock',[PasslockController::class,'formIt']);
Route::post('/dashboard/formlock',[PasslockController::class,'lockIt']);

Route::get('/dashboard/list',[PasslockController::class,'readIt']);
Route::post('/dashboard/list',[PasslockController::class,'readIt']);

Route::get('/delete/{id}',[PasslockController::class,'delIt']);

Route::get('/edit/{id}',[PasslockController::class,'fetchIt']);
Route::post('/edit',[PasslockController::class,'upIt']);


