<?php

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


// Relasi
Route::get('penulis', function(){
	$penulis = \App\User::find(1);

	foreach ($penulis->artikel as $data) {
		echo "Judul : $data->judul<br>";
		echo "Deskripsi : $data->deskripsi<br>";
		echo "Slug : $data->slug";
		echo "<hr>";
	}
});

use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1', function () {

	#Mencari mahasiswa dengan NIM 1010101
	$mahasiswa = Mahasiswa::where('nim','=','1010101')->first();

	#Menampilkan nama wali dari mahasiswa tsb
	return $mahasiswa->wali->nama;
});

Route::get('relasi-3', function () {
	# Mencari dosen yang bernama Abdul mushafa
	$dosen = Dosen::where('nama','=','Abdul Musthafa')->first();

	#Menampilkan seluruh data mahasiswa dari dosen Abdul Musthafa
});

Route::get('relasi-4',function () {
	#Mencari data Mahasiswa yang memiliki nama Syahrul 
	$novay = 
})
