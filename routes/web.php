<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopupController;

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
});

// Creating a route to dynamically call the url
Route::get('/pop-up/{id}', [PopupController::class , 'show'] );
