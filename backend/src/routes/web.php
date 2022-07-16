<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

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

/**
 * HELCOM
 */

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/know.html', function () {
    return view('know');
});

Route::get('/together.html', function () {
    return view('others');
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/input', [ContentController::class, 'input'])->name('input');

require __DIR__.'/auth.php';

Route::get('/input', [ContentController::class, 'input'])->name('input');

Route::post('/save', [ContentController::class, 'save'])->name('save');
