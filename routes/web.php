<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reportController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[reportController::class, 'index']);
Route::get('/export',[reportController::class, 'export'])->name('export');

Route::post('/import',[reportController::class, 'import'])->name('import');

Route::get('ss',[reportController::class, 'ss']);
Route::get('aa',[reportController::class, 'ss']);
