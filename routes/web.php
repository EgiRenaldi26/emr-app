<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PetugasC;

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
    return redirect()->route('login');
});

Route::get('/create', function () {
    return view('create.siswa');
});


Route::get('/dashboard/admin',[LayoutController::class,'index'])->middleware('auth')->name('dashboard.admin');
Route::get('/dashboard/operator',[PetugasC::class,'index'])->middleware('auth')->name('dashboard.operator');

Route::controller(LoginController::class)->group(function() {
    Route::get('login', 'index')->name('login');
    Route::post('login' , 'login')->name('login.login');
    Route::get('logout','logout');

});

// Route::group(['middleware' => ['auth']],function(){
//     Route::group(['middleware' => ['CekUserLogin:1']],function(){
//         Route::resource('admin',AdminController::class);
//     });
//     Route::group(['middleware' => ['CekUserLogin:2']],function(){
//         Route::resource('operator',OperatorController::class);
//     });
// });

// show
Route::get('/datasiswa',[DatasiswaController::class,'index'])->name('siswa.index');
Route::get('/datakelas',[KelasController::class,'index'])->name('kelas.index');
Route::get('/dataobat',[ObatController::class,'index'])->name('obat.index');

// Create
Route::get('/datasiswa/create', [DatasiswaController::class, 'create'])->name('data.create')->middleware('auth');
Route::post('/datasiswa/store', [DatasiswaController::class, 'store'])->name('data.store');

Route::get('/datakelas/create', [KelasController::class, 'create'])->name('kelas.create')->middleware('auth');
Route::post('/datakelas/store', [KelasController::class, 'store'])->name('kelas.store');

Route::get('/dataobat/create', [ObatController::class, 'create'])->name('obat.create')->middleware('auth');
Route::post('/dataobat/store', [ObatController::class, 'store'])->name('obat.store');

// Edit
Route::get('/data/edit/{id}', [DatasiswaController::class, 'edit'])->name('data.edit')->middleware('auth');
Route::put('/datasiswa/{id}', [DatasiswaController::class, 'update'])->name('data.update')->middleware('auth');

Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit')->middleware('auth');
Route::put('/datakelas/{id}', [KelasController::class, 'update'])->name('kelas.update')->middleware('auth');

Route::get('/obat/edit/{id}', [ObatController::class, 'edit'])->name('obat.edit')->middleware('auth');
Route::put('/dataobat/{id}', [ObatController::class, 'update'])->name('obat.update')->middleware('auth');

// Delete
Route::delete('/datasiswa/{id}', [DatasiswaController::class, 'destroy'])->name('data.destroy');
Route::delete('/datakelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
Route::delete('/dataobat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');