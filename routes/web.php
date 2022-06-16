<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/deneme', function () {
    return view('ornek');
});

//Route::get('/phpturkiye', [ornek::class,'test']);
//Route::get('/phpturkiye/{isim}', [ornek::class, 'hg']);
Route::get('/phpturkiye/{isim}', function ($isim) {
    return view('ornek', ['ad'=>$isim]);
});

Route::get('/web', [Yonet::class,'site']) ->name('bilgi');

Route::get('/form',[Formislemleri::class,'gorunum']);

Route::middleware('arakontrol')->get('/form-sonuc',[Formislemleri::class,'sonuc'])->name('sonuci');