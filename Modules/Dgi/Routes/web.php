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

use Modules\Dgi\Http\Controllers\DgiController;

Route::get('dgi/{id}',[DgiController::class, "create"])->name("dgi.create");
