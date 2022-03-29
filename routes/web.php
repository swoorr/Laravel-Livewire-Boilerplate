<?php

use App\Http\Livewire\AddUser;
use App\Http\Livewire\ShowCars;
use App\Http\Livewire\ShowUsers;
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

Route::get('/user', AddUser::class);
Route::get('/user/list', ShowUsers::class);
Route::get('/cars', ShowCars::class);
