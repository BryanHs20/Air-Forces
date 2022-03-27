<?php

use Illuminate\Support\Facades\Route;
//Se manda a llamar el controlador
use App\Http\Controllers\AForceController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SecionController;

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

Route::get('/aForce', [AForceController::class, 'aForce'])->name('vista.blog');

Route::get('/aeronave/{slug}', [AForceController::class, 'tema'])->name('mostrar.pub');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
