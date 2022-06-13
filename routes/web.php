<?php

use Illuminate\Support\Facades\Route;

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


//Login !!!
Route::get('/', function () {
    return view('login');
});


//Mahasiswa !!!
Route::get('/profilMhs', function () {
    return view('profilMhs');
});

Route::get('/perwalian', function () {
    return view('perwalian');
});

Route::get('/formIsiKrsPrediksi', function () {
    return view('formIsiKrsPrediksi');
});

Route::get('/lihatKrs', function () {
    return view('lihatKrs');
});

Route::get('/chatDosen', function () {
    return view('chatDosen');
});

Route::get('/formIsiChatDosen', function () {
    return view('formIsiChatDosen');
});

Route::get('/lihatChat', function () {
    return view('lihatChat');
});


//Dosen !!!!
Route::get('/profilDsn', function () {
    return view('profilDsn');
});

Route::get('/dataBimbingan', function () {
    return view('dataBimbingan');
});

Route::get('/chatDosenBlsMhs', function () {
    return view('chatDosenBlsMhs');
});

Route::get('/isiKrsMhs', function () {
    return view('isiKrsMhs');
});