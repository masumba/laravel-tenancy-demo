<?php

use App\Http\Controllers\RegisterTenantController;
use Illuminate\Support\Facades\Route;

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
})->name('base');



/*require __DIR__.'/auth.php';*/

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterTenantController::class, 'create']);
    Route::post('/register', [RegisterTenantController::class, 'store'])->name('register-tenant');
});
