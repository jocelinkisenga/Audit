<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use Modules\Declaration\Entities\DeclarationEntrepriseDgi;
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

use Modules\Declaration\Http\Controllers\DeclarationController;
use Modules\Entreprise\Http\Controllers\EmployeController;


Route::get("declarations/{id}",[DeclarationController::class,'index'])->name("declarations");
Route::get("create/{id}",[DeclarationController::class,"create"])->name("create.declaration");
Route::post('declaration',[DeclarationController::class,'store'])->name("store.declaration");



