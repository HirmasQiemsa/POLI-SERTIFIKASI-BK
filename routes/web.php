<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('beranda');
});

//ROUTE ADMIN
Route::get('/login/admin', [AdminController::class,'login'])->name('login-admin');
Route::post('/login/admin/proses', [AdminController::class,'login_proses'])->name('login-proses-admin');
Route::get('/dashboard/admin', [AdminController::class,'dashboard'])->name('dashboard-admin');
Route::get('/logout/admin', [AdminController::class,'logout'])->name('logout-admin');
//--KELOLA DOKTER
Route::get('/kelola/dokter', [AdminController::class,'kelola_dokter'])->name('kelola-dokter');
Route::get('/create-dokter', [AdminController::class,'create_dokter'])->name('create-dokter');
Route::get('/edit-dokter/{id}', [AdminController::class,'edit_dokter'])->name('edit-dokter');
Route::post('/add-dokter', [AdminController::class,'add_dokter'])->name('add-dokter');
Route::get('/edit-dokter/{id}', [AdminController::class,'edit_dokter'])->name('edit-dokter');
Route::put('/update-dokter/{id}', [AdminController::class,'update_dokter'])->name('update-dokter');
Route::delete('/delete-dokter/{id}', [AdminController::class,'delete_dokter'])->name('delete-dokter');
//--KELOLA PASIEN
Route::get('/kelola/pasien', [AdminController::class,'kelola_pasien'])->name('kelola-pasien');
Route::get('/create-pasien', [AdminController::class,'create_pasien'])->name('create-pasien');
Route::get('/edit-pasien/{id}', [AdminController::class,'edit_pasien'])->name('edit-pasien');
Route::post('/add-pasien', [AdminController::class,'add_pasien'])->name('add-pasien');
Route::get('/edit-pasien/{id}', [AdminController::class,'edit_pasien'])->name('edit-pasien');
Route::put('/update-pasien/{id}', [AdminController::class,'update_pasien'])->name('update-pasien');
Route::delete('/delete-pasien/{id}', [AdminController::class,'delete_pasien'])->name('delete-pasien');
//--KELOLA OBAT
Route::get('/kelola/obat', [AdminController::class,'kelola_obat'])->name('kelola-obat');
Route::get('/create-obat', [AdminController::class,'create_obat'])->name('create-obat');
Route::post('/add-obat', [AdminController::class,'add_obat'])->name('add-obat');
Route::get('/edit-obat/{id}', [AdminController::class,'edit_obat'])->name('edit-obat');
Route::put('/update-obat/{id}', [AdminController::class,'update_obat'])->name('update-obat');
Route::delete('/delete-obat/{id}', [AdminController::class,'delete_obat'])->name('delete-obat');
//--KELOLA POLI
Route::get('/kelola/poli', [AdminController::class,'kelola_poli'])->name('kelola-poli');
Route::get('/create-poli', [AdminController::class,'create_poli'])->name('create-poli');
Route::post('/add-poli', [AdminController::class,'add_poli'])->name('add-poli');
Route::get('/edit-poli/{id}', [AdminController::class,'edit_poli'])->name('edit-poli');
Route::put('/update-poli/{id}', [AdminController::class,'update_poli'])->name('update-poli');
Route::delete('/delete-poli/{id}', [AdminController::class,'delete_poli'])->name('delete-poli');


//ROUTE DOKTER
Route::get('/login/dokter', [DokterController::class,'login'])->name('login-dokter');
Route::post('/login/dokter/proses', [DokterController::class,'login_proses'])->name('login-proses-dokter');
Route::get('/dashboard/dokter', [DokterController::class,'dashboard'])->name('dashboard-dokter');
Route::get('/logout/dokter', [DokterController::class,'logout'])->name('logout-dokter');


//ROUTE PASIEN
Route::get('/login/pasien', [PasienController::class,'login'])->name('login-pasien');
Route::post('/login/pasien/proses', [PasienController::class,'login_proses'])->name('login-proses-pasien');
Route::get('/register/pasien', [PasienController::class,'register'])->name('register');
Route::post('/register/pasien/proses', [PasienController::class,'register_proses'])->name('register-proses');
Route::get('/dashboard/pasien', [PasienController::class,'dashboard'])->name('dashboard-pasien');
Route::get('/logout/pasien', [PasienController::class,'logout'])->name('logout-pasien');
