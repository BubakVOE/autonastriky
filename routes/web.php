<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GalerieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TestController;

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


Auth::routes();


Route::group(['middleware' => ['auth', 'admin']], function () {
    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    route::delete('/dashboard/{id}', [DashboardController::class, 'delete'])->name('dashboard-delete');

    route::get('/dashboard/galerie/create', [GalerieController::class, 'create'])->name('dashboard-galerie-create');
    route::post('/dashboard/galerie/store', [DashboardController::class, 'store'])->name('dashboard-galerie-store');
});




route::get('/', [NavController::class, 'index'])->name('home');
route::get('galerie', [NavController::class, 'galerie'])->name('galerie');
route::get('cenik', [NavController::class, 'cenik'])->name('cenik');
route::get('kontakt', [NavController::class, 'kontakt'])->name('kontakt');


route::post('reservation', [ReservationController::class, 'store'])->name('reservation');


route::get('dashboard/galerie/create', [DashboardController::class, 'view'])->name('dashboard-galerie-create');
route::post('dashboard/galerie/store', [DashboardController::class, 'store'])->name('dashboard-galerie-store');

