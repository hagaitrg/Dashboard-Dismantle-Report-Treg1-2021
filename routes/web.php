<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DismantleController;

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

Route::get('/', [DismantleController::class, 'index']);
Route::post('/create-dismantle', [DismantleController::class, 'store']);
Route::delete('/delete-dismantle/{id}', [DismantleController::class, 'destroy']);
