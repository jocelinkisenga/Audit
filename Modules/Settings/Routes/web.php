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

use Modules\Settings\Http\Controllers\DeviseController;
use Modules\Settings\Http\Controllers\FonctionController;

Route::prefix('settings')->group(function() {
    Route::get("/fonctions",[FonctionController::class,"index"])->name("fonction.index");
    Route::post("storeFonction",[FonctionController::class,"store"])->name("fonction.store");
    Route::get("devises",[DeviseController::class,"index"])->name("devise.index");
    Route::post("devise",[DeviseController::class,"store"])->name("devise.store");
});
