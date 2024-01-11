<?php

use Illuminate\Support\Facades\Route;
use App\Models\Manga;

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
    return view('Mangakall');
});

Route::get('/Manga', function () {
    return view('Manga', [
        "post" => Manga::list()
    ]);
});

Route::get('/tmdc', function () {
    return view('\manga_collection\tmdc');
});

Route::get('/Review', function () {
    return view('Review', [
        "nama" => "Kall",
        "manga" => "zekita hon de katta",
        "comment" => "bagus"
    ]);
});

