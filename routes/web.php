<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
  
/*
----------Web Routes-----------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();
  
/*---------All Normal Users Routes List----*/
Route::middleware(['auth', 'user-access:client'])->group(function () {
  
    //Route::middleware(['auth'])->get('/home', [HomeController::class, 'index'])->name('home');
     Route::get('client/dashboard', [HomeController::class, 'index'])->name('client.dashboard');

});
  
/*--------All Admin Routes List-----------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
    Route::get('/admin/client', [HomeController::class, 'adminClinet'])->name('admin.client');
    Route::get('/admin/staff', [HomeController::class, 'adminStaff'])->name('admin.staff');
    Route::get('/admin/project', [HomeController::class, 'adminProject'])->name('admin.project');
    Route::get('/admin/enquiries', [HomeController::class, 'adminEnquiries'])->name('admin.enquiries');
});
  
/*-------All Admin Routes List--------*/
Route::middleware(['auth', 'user-access:staff'])->group(function () {
  
    Route::get('/staff/dashboard', [HomeController::class, 'staffHome'])->name('staff.dashboard');
});