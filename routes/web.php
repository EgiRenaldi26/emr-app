<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;

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


Route::get('/dashboard',[LayoutController::class,'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function() {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses' , 'proses');
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

// Create
Route::get('/datasiswa/create', [DatasiswaController::class, 'create'])->name('data.create')->middleware('auth');
Route::post('/datasiswa/store', [DatasiswaController::class, 'store'])->name('data.store');

// Edit
Route::get('/data/edit/{id}', [DatasiswaController::class, 'edit'])->name('data.edit')->middleware('auth');
Route::put('/datasiswa/{id}', [DatasiswaController::class, 'update'])->name('data.update')->middleware('auth');


