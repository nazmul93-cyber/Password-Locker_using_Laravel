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

Route::group(['middleware'=>'web'], function() {
    Route::get('/dashboard/formlock',[PasslockController::class,'formIt'])->name('form');
    Route::post('/dashboard/formlock',[PasslockController::class,'lockIt']);

    Route::get('/dashboard/list',[PasslockController::class,'readIt'])->name('list');
    Route::post('/dashboard/list',[PasslockController::class,'readIt']);

    Route::get('/delete/{id}',[PasslockController::class,'delIt']);

    Route::get('/edit/{id}',[PasslockController::class,'fetchIt']);
    Route::post('/edit',[PasslockController::class,'upIt']);

    Route::get('/dashboard/settings',[PasslockController::class,'setForm']);
    Route::post('/dashboard/settings',[PasslockController::class,'setIt']);


});

// Route::get('/dashboard/formlock',[PasslockController::class,'formIt'])->name('form');
// Route::post('/dashboard/formlock',[PasslockController::class,'lockIt']);

// Route::get('/dashboard/list',[PasslockController::class,'readIt'])->name('list');
// Route::post('/dashboard/list',[PasslockController::class,'readIt']);

// Route::get('/delete/{id}',[PasslockController::class,'delIt']);

// Route::get('/edit/{id}',[PasslockController::class,'fetchIt']);
// Route::post('/edit',[PasslockController::class,'upIt']);



require __DIR__.'/auth.php';

// demo setting options     // // day #2 for nazmul
// Route::get('/dashboard/settings',[PasslockController::class,'setForm']);
// Route::post('/dashboard/settings',[PasslockController::class,'setIt']);
