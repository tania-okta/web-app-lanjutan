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

Route::get("/about-me", function () {
    return "Nama Saya <b>Tania Oktavia </b>";
});

Route::get("/Film", function () {
    return "Sangat menyukai film action";
});

Route::get("/Judul", function () {
    return "Sangat suka film action yang berjudul Bloodshot";
});

Route::get("/Berita", function () {
    return "Baru ini sedang terjadinya demo besar-besaran di Indonesia, yang membahas tentang Omnibus Law";
});

Route::get("/Iphone", function () {
    return "Apple akhirnya meluncurkan Iphone 12 ";
});

Route::get("/Hot-news", function () {
    return "Dianggap menghina Islam, Presiden Perancis dukung karikatur Nabi Muhammad SAW ";
});

Route::get("/satu", function () {
    return view ("view-1");
});

Route::get("/dua", function () {
    return view ("view-2");
});

Route::get("/tiga", function () {
    return view ("view-3");
});

Route::get("/empat", function () {
    return view ("view-4");
});

Route::get("/lima", function () {
    return view ("view-5");
});

Route::get("/enam", function () {
    return view ("view-6");
});

use App\Http\Controllers\UtamaController;
Route::get("/utama/test", [UtamaController::class, "test"]);

use App\Http\Controllers\SatuController;
Route::get("/utama/Tania 1", [SatuController::class, "satu"]);

Route::get("/utama/Tania 2", [SatuController::class, "dua"]);

Route::get("/utama/Tania 3", [SatuController::class, "tiga"]);

use App\Http\Controllers\DuaController;
Route::get("/utama/Tania 4", [DuaController::class, "empat"]);

Route::get("/utama/Tania 5", [DuaController::class, "lima"]);

Route::get("/utama/Tania 6", [DuaController::class, "enam"]);
