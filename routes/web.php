<?php

use App\Http\Controllers\PeopleController;
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
});

Route::get('/people', [PeopleController::class, 'index']);

Route::post('/people', [PeopleController::class, 'store']);
Route::get('/people/create', [PeopleController::class, 'create']);


Route::get('/people/{id}', [PeopleController::class, 'show']);
Route::delete('/people/{id}', [PeopleController::class, 'delete']);
