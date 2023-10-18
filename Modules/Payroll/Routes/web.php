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

use Modules\Payroll\Http\Controllers\PaiementController;
use Modules\Payroll\Http\Controllers\PayrollController;

Route::prefix('payroll')->group(function() {
    Route::get('/', 'PayrollController@index')->name("payroll.employ.index");
    Route::get("addEmploye/",'PayrollController@create')->name("payroll.employ.add");
    Route::post("storeEmploye","PayrollController@store")->name("payroll.employe.store");
    Route::get("/createPaiement/{id}",'PaiementController@create')->name("paiement.create");
    Route::post("storePaiement",'PaiementController@store')->name("payment.store");
    Route::get("payments","PaiementController@list")->name("payment.list");

});


