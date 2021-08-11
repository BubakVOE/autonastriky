<?php

use App\Http\Controllers\NavController;
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


route::get('/', [NavController::class, 'index'])->name('home');
route::get('/galerie', [NavController::class, 'galerie'])->name('galerie');
route::get('/cenik', [NavController::class, 'cenik'])->name('cenik');
route::get('kontakt', [NavController::class, 'kontakt'])->name('kontakt');