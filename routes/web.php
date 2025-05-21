<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

//import java.io;


//system.out.println();
Route::get('/', function () { // Route::get('published url', 'controller[simple html, view, function di ...]')
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloworld']);

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootsrapt1', function () {
	return view('bootsrapt1');
});

Route::get('eminalinktree', function () {
	return view('eminalinktree');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('layoutexercise029', function () {
	return view('layoutexercise029');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('test', function () {
	return view('test');
});

Route::get('danantara', function () {
	return view('danantara');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('dosen', [Link::class, 'index']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir/', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//route blog
Route::get('/blog', [blogcontroller::class, 'home']);
Route::get('/blog/tentang', [blogcontroller::class, 'tentang']);
Route::get('/blog/kontak', [blogcontroller::class, 'kontak']);
