<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasslockController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



// passlock app

//the name method is being used so that we can call the route easily 
//checkout the dashboard blade 



Route::get('/dashboard/formlock',[PasslockController::class,'formIt'])->name('form')->middleware('auth');
Route::post('/dashboard/formlock',[PasslockController::class,'lockIt'])->middleware('auth');

Route::get('/dashboard/list',[PasslockController::class,'readIt'])->name('list')->middleware('auth');
Route::post('/dashboard/list',[PasslockController::class,'readIt'])->middleware('auth');

Route::get('/delete/{id}',[PasslockController::class,'delIt'])->middleware('auth');

Route::get('/edit/{id}',[PasslockController::class,'fetchIt'])->middleware('auth');
Route::post('/edit',[PasslockController::class,'upIt'])->middleware('auth');

// setting options    // day #2 for nazmul
Route::get('/dashboard/settings',[PasslockController::class,'setForm'])->middleware('auth');
Route::post('/dashboard/settings',[PasslockController::class,'setIt'])->middleware('auth');



require __DIR__.'/auth.php';

