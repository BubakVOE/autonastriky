<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReservationController;

use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\DashboardController;

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

});

    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    route::delete('/dashboard/{id}', [DashboardController::class, 'delete'])->name('dashboard-delete');

    route::get('/dashboard/galerie/create', [PostController::class, 'create'])->name('galerie.create');
    route::post('/dashboard/galerie/store', [PostController::class, 'store'])->name('galerie.store');
    route::get('/dashboard/galerie/{id}', [PostController::class, 'edit'])->name('galerie.edit');
    route::put('/dashboard/galerie/update/{id}', [PostController::class, 'update']);
    Route::delete('/dashboard/galerie/delete/{id}',[PostController::class,'destroy']);

    Route::delete('/dashboard/galerie/deleteimage/{id}',[PostController::class,'deleteimage']);
    Route::delete('/dashboard/galerie/deletecover/{id}',[PostController::class,'deletecover']);



// route::put('/dashboard/reservation/update/{id}', [ReservationController::class, 'update']);




// public
route::get('/', [PagesController::class, 'index'])->name('home');
route::get('galerie', [PagesController::class, 'galerie'])->name('galerie');
route::get('cenik', [PagesController::class, 'cenik'])->name('cenik');
route::get('kontakt', [PagesController::class, 'kontakt'])->name('kontakt');


route::post('reservation', [ReservationController::class, 'store'])->name('reservation');
route::get('dashboard/galerie/show/{id}', [ReservationController::class, 'show']);









