<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ReservationController;

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

Route::get('/main', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin']], function () {
    route::get('/admin', [DashboardController::class, 'index']);
});

route::get('/admin/login', [DashboardController::class, 'login']);

route::get('/', [NavController::class, 'index'])->name('home');
route::get('galerie', [NavController::class, 'galerie'])->name('galerie');
route::get('cenik', [NavController::class, 'cenik'])->name('cenik');
route::get('kontakt', [NavController::class, 'kontakt'])->name('kontakt');


route::post('reservation', [ReservationController::class, 'store'])->name('reservation');