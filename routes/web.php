<?php

use App\Models\CRUDS;
use App\Http\Controllers\CRUD;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PopUpController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleUserController;
use App\Models\Vehicle;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    // =============================Login Route=============================
    // Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
    // Route::post('/login', [CRUD::class, 'index'])->name('login.submit');

    // Route::middleware('auth')->group(function () {
        //     Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
        //     Route::get('/settings', [UserController::class, 'showSettingsForm'])->name('settings');
        //     Route::post('/settings', [UserController::class, 'updateSettings'])->name('settings.update');
        //     Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        // });

    // =============================Login Route=============================

    // =============================CRUD Route=============================
    Route::get('/', [CRUD::class,'index']);
    Route::post('send/data',[CRUD::class, 'store'])->name('store.data');
    Route::get('data/record',[CRUD::class,'show'])->name('record.data');
    Route::get('/crud/{id}/edit',[CRUD::class,'edit'])->name('record.edit');
    Route::post('/crud/{id}',[CRUD::class,'update'])->name('record.update');
    Route::delete('record/{id}',[CRUD::class,'destroy'])->name('delete.record');
    // =============================CRUD Route=============================


    // =============================One To One Relationship Route=============================

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/vehicles/create/{user_id}', [VehicleController::class, 'create'])->name('vehicles.create');
    // Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
    Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');


    // =============================One To One Relationship Route=============================



// Route::get('/show-popup', [PopUpController::class, 'SHowPupUp']);
