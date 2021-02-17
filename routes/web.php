<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/inputs/{filepath}/download', [InputController::class, 'download'])->name('inputs.download');
Route::resource('inputs', InputController::class);


