<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Npm21312060Controller;
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
    return view('datatable.index');
});

//CRUD CAST
Route::get('/fNpm21312060', [Npm21312060Controller::class, 'index']);
Route::post('/fNpm21312060', [Npm21312060Controller::class, 'store']);
Route::get('/fNpm21312060/create', [Npm21312060Controller::class, 'create']);
Route::get('/fNpm21312060/{fNpm21312060_id}/edit', [Npm21312060Controller::class, 'edit']);
Route::put('/fNpm21312060/{fNpm21312060_id}', [Npm21312060Controller::class, 'update']);
Route::delete('/fNpm21312060/{fNpm21312060_id}', [Npm21312060Controller::class, 'destroy']);
