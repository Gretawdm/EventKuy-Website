<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::middleware('auth')->group(function () {
//     Route::middleware('role:admin')->group(function () {
//        Route::get('/admin', [AdminCategoryController::class, 'index']);

//         Route::get('/biodata', [BiodataController::class,'index'])->name('viewBiodata');
//         Route::get('/tambah-biodata', [BiodataController::class,'tambahBiodata'])->name('viewBiodata');
//         Route::post('/tambah-biodata', [BiodataController::class,'store'])->name('storeBiodata');
//     });

//     Route::middleware('role:user')->group(function () {    
//         Route::get('/home', [HomeController::class,'index'])->name('home');
//     });
    
//     Route::post('/logout', [LoginController::class,'logout'])->name('logout');
//     Route::get('/unauthorized', [UserController::class,'unauthorized']);
// });



Route::get('/',[HomeController::class,'index'])->name('home1');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);

Route::resource('/admin', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::get('/admin', [AdminCategoryController::class, 'index']);
Route::get('/detail_admin/{id}', [AdminCategoryController::class, 'show'])->name('events.show');

Route::resource('/dashboard', DashboardController::class)->except('show')->middleware('auth');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'register']);


// Route::get('/index.html',[HomeController::class,'index'])->name('home1');

 Route::post('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/about.html',[DashboardController::class,'about'])->name('about');
Route::get('/contact.html',[DashboardController::class,'contact'])->name('contact');
Route::get('/services.html',[DashboardController::class,'service']);