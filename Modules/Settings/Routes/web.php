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

use Illuminate\Support\Facades\Route;
use Modules\Settings\Http\Controllers\DeviseController;
use Modules\Settings\Http\Controllers\FonctionController;

Route::prefix('settings')->group(function() {
    Route::get("/fonctions",[FonctionController::class,"index"])->name("fonction.index");
    Route::get("/editFunction/{id}",[FonctionController::class,"edit"])->name("fonction.edit");
    Route::post("storeFonction",[FonctionController::class,"store"])->name("fonction.store");
    Route::put("editFuntion",[FonctionController::class,"update"])->name("fonction.update");
    Route::get("devises",[DeviseController::class,"index"])->name("devise.index");
    Route::post("devise",[DeviseController::class,"store"])->name("devise.store");
});
