<?php

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

use Modules\Tax\Http\Controllers\TaxController;

Route::prefix('tax')->group(function() {
    Route::get("taxes",[TaxController::class,"index"])->name("taxes");
    Route::get("tax",[TaxController::class,"create"])->name("create.tax");
    Route::post("taxes",[TaxController::class,"store"])->name("store.tax");
});
