<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MahasiswaController;

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
    return view('welcome');
});

//mengirim data ke view
Route::get("/hallo", function(){
    $data = ['nama' => 'edwin', 'npm' => '1923240087', 'alamat' => 'Palembang'];
    return view("hallo", $data);
});

//menerima data/parameter dan menampilkannya di view
Route::get("/kenalan/{nama}/{npm}", function($nama, $npm){
    $data = ['nama' => $nama, 'npm' => $npm];
    return view("hallo", $data);
});


//Route ke halaman fakultas
Route::get("/fakultas", function(){
    $data = ["fakultas" => ["Fasilkom Rekayasa", "Fak. Ekonomi dan Bisnis"]];
    return view("fakultas.index", $data);
});


//Route Persiapan DB Facade
Route::get('/mahasiswa/insert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete', [MahasiswaController::class, 'delete']);
Route::get('/mahasiswa/select', [MahasiswaController::class, 'select']);

//Persiapan Query Builder
Route::get('/mahasiswa/insert-qb', [MahasiswaController::class, 'insertQb']);
Route::get('/mahasiswa/update-qb', [MahasiswaController::class, 'updateQb']);
Route::get('/mahasiswa/delete-qb', [MahasiswaController::class, 'deleteQb']);
Route::get('/mahasiswa/select-qb', [MahasiswaController::class, 'selectQb']);

//Persiapan Eloquent
Route::get('/mahasiswa/insert-elq', [MahasiswaController::class, 'insertElq']);
Route::get('/mahasiswa/update-elq', [MahasiswaController::class, 'updateElq']);
Route::get('/mahasiswa/delete-elq', [MahasiswaController::class, 'deleteElq']);
Route::get('/mahasiswa/select-elq', [MahasiswaController::class, 'selectElq']);