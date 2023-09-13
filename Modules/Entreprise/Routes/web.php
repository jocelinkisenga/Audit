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

use Modules\Entreprise\Http\Controllers\EmployeController;
use Modules\Entreprise\Http\Controllers\EntrepriseController;


    Route::get("entreprises",[EntrepriseController::class,'index'])->name("entreprises");

    Route::get("create",[EntrepriseController::class,"create"])->name("create.entreprise");

    Route::post('store/',[EntrepriseController::class,"store"])->name("store.entreprise");

    Route::get('employes/{id}',[EmployeController::class,"index"])->name("employes");

    Route::get("liste-declaration/{id}",[EmployeController::class,"employe_declarations"])->name("employe.declarations");


