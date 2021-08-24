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

Route::get('/tambah-dismantle', function () {
    return view('add-dismantle');
});
Route::get('/', [DismantleController::class, 'indexDashboard']);
Route::get('/dismantle', [DismantleController::class, 'index']);
Route::post('/create-dismantle', [DismantleController::class, 'store']);
Route::get('/edit-dismantle/{id}', [DismantleController::class, 'edit']);
Route::delete('/delete-dismantle/{id}', [DismantleController::class, 'destroy']);
Route::patch('/update-dismantle/{id}', [DismantleController::class, 'update']);


Route::get('/recabp23', [Recabp23Controller::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
