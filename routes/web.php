<?php

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


Route::get('worker/{id}/delete', 'WorkerController@removeWorkerById');
Route::get('workers/new/', 'WorkerController@createWorker');
Route::get('/positions', 'PositionController@getPositions');
Route::get('/workers', 'WorkerController@getWorkers');
Route::get('/workers/{worker_id}', 'WorkerController@getWorkerById');
Route::get('workers/{worker_id}/edit', 'WorkerController@editWorkerInformation');

