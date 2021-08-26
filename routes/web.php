<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DismantleController;
use App\Http\Controllers\Recabp23Controller;

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

// can access routes after login
    Route::middleware('auth')->group(function(){
    
    // Dashboard routes
    Route::get('/', [DismantleController::class, 'indexDashboard']);
    
    // dismantle routes
    Route::prefix('dismantle')->group(function () {
        Route::get('/tambah', function () {
            return view('add-dismantle');
        });
        Route::get('/', [DismantleController::class, 'index']);
        Route::post('/create', [DismantleController::class, 'store']);
        Route::get('/edit/{id}', [DismantleController::class, 'edit']);
        Route::delete('/delete/{id}', [DismantleController::class, 'destroy']);
        Route::patch('/update/{id}', [DismantleController::class, 'update']);
    });

    // recabp23 routes
    Route::get('/recabp23', [Recabp23Controller::class, 'index']);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
