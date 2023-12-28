<?php

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

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

// Homepage (Access: Admin, User, Guest)
Route::get('/', [FoodController::class, 'index'])->name('home');

// Create Form (Access: Admin)
Route::get('/manage/menu/create', [FoodController::class, 'create'])->middleware('auth');

// Store Food Data (Access: Admin)
Route::post('/manage/menu/create', [FoodController::class, 'store'])->middleware('auth');;

// Update Food Data (Access: Admin)
Route::put('/manage/menu/create/{food}', [FoodController::class, 'update'])->middleware('auth');

// Update User Occupancy Data (Access: Admin)
Route::put('/manage/tables/occupy/{user}', [UserController::class, 'occupy'])->middleware('auth');

// Single Food Type (Access: Admin, User, Guest)
Route::get('/menu/{type}', [FoodController::class, 'menu']);

// Management Page (Access: Admin)
Route::get('/manage', [FoodController::class, 'manage'])->middleware('auth');

// Menu Edit Page (Access: Admin)
Route::get('/manage/menu', [FoodController::class, 'manageMenu'])->middleware('auth');

// Delete Food Item (Access: Admin)
Route::delete('/manage/menu/delete/{food}', [FoodController::class, 'destroy'])->middleware('auth'); 

// Show Edit Form (Access: Admin)
Route::get('manage/menu/{food}/edit', [FoodController::class, 'edit'])->middleware('auth'); 

// Table Management Page (Access: Admin)
Route::get('/manage/tables', [FoodController::class, 'tables'])->middleware('auth');

// Orders Page (Access: User)
Route::get('/orders', [OrderController::class, 'index'])->middleware('auth');

// Store Order Data (Access: User)
Route::post('/orders/order', [OrderController::class, 'store'])->middleware('auth');

// Show Login Page (Access: Guest)
Route::get('/login', [UserController::class, 'login'])->middleware('guest');

// Log In User (Access: Guest)
Route::post('/user/authenticate', [UserController::class, 'authenticate']);

// Log User Out (Access: Admin, User)
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');