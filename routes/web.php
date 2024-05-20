<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailEventController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\TambahEventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpKernel\Profiler\Profile;

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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/our_services', [HomeController::class, 'service']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/waiting_verified', [LoginController::class, 'unferivied'])->name('unferivied');



Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/forgot_password', [LoginController::class, 'forgot_pw'])->name('forgot_password');

Route::resource('/verifikasi_event', AdminCategoryController::class)->except('show')->middleware('admin');
Route::delete('/verifikasi_event/{id}', [AdminCategoryController::class, 'destroy'])->name('verifikasi_event.destroy');
Route::delete('/verifikasi_event/{id}', [AdminCategoryController::class, 'update'])->name('verifikasi_event.update');
Route::post('/verifikasi_event/{id}/verify', [AdminCategoryController::class, 'verify'])->name('verifikasi_event.verify');
Route::post('/verifikasi_event/{id}/unverify', [AdminCategoryController::class, 'unverify'])->name('verifikasi_event.unverify');
Route::get('/detail_event/{id_event}', [AdminCategoryController::class, 'show'])->name('detail_event.show');

Route::get('/verifikasi_akun', [AdminCategoryController::class, 'akun'])->name('verifikasi_akun')->middleware('admin');
Route::post('/verifikasi_akun/{id}', [AdminCategoryController::class, 'verifikasi_akun'])->name('verifikasi_akun.update');
// Route::get('/data', [AdminCategoryController::class, 'data']);
// Route::get('/event',[TambahEventController::class,'index'])->name('event');

// Route::resource('/event', DashboardController::class)->except('show')->middleware('admin');
// Route::get('/event', [DashboardController::class, 'index'])->name('event')->middleware('admin');
Route::get('/tenant', [DashboardController::class, 'tenant'])->name('tenant')->middleware('admin');
// Route::get('/detail_tenant/{id}', [DashboardController::class, 'show'])->name('detail_tenant.show');

Route::get('/event/tambah_event', [TambahEventController::class, 'index'])->name('tambah_event');
Route::post('/event/tambah_event/store', [TambahEventController::class, 'store'])->name('tambah_event.store');

Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/detail/{id_event}', [EventController::class, 'show'])->name('event.show');

Route::get('/event/{id}', [DetailEventController::class, 'edit_event'])->name('event.edit');
Route::put('/event/{id}', [DetailEventController::class, 'update_event'])->name('event.update');

Route::get('/booth/{id}', [DetailEventController::class, 'edit_booth'])->name('booth.edit');
Route::put('/booth/{id}', [DetailEventController::class, 'update_booth'])->name('booth.update');
Route::delete('/booth/{id}', [DetailEventController::class, 'destroy_booth'])->name('booth.destroy');
Route::get('/event/{id_event}/tambah-booth', [DetailEventController::class, 'tambah_booth'])->name('booth.create');

// Route untuk menyimpan data booth yang ditambahkan
Route::post('/event/{id_event}/store-booth', [DetailEventController::class, 'booth_store'])->name('booth.store');

Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
Route::get('/edit_profile',[ProfileController::class, 'edit_profile'])->name('edit_profile');
Route::put('edit_profile/update',[ProfileController::class,'update_profile'])->name('update_profile');
Route::get('/ubah_password',[ProfileController::class, 'ubah_password'])->name('ubah_password');
Route::put('/ubah_password/update',[ProfileController::class, 'update_password'])->name('update_password');
Route::post('/get-bank-details', [BankAccountController::class, 'getBankDetails'])->name('get.bank.details');