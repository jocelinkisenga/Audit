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

Route::prefix('drhkat')->group(function() {
    Route::get('/', 'DrhkatController@index')->name("drhkat.index");
    Route::get("impotVehicule","ImpotSurLesVehiculesController@index")->name("drhkat.vehicules");
    Route::get("impotLocatifs","ImpotLeRevenuLocatifController@index")->name("drhakt.locatif");
    Route::get("impotFoncier","ImpotLeRevenuFoncierController@index")->name("drhkat.foncier");
});
