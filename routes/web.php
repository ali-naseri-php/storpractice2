<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('kalas/{parent}/{category}',[\App\Http\Controllers\KalaController::class,'allKala']);
Route::get('/new/kala',[\App\Http\Controllers\KalaController::class,'newKala'])->name('new.kala');
Route::post('/store',[\App\Http\Controllers\KalaController::class,'store'])->name('store');
Route::get('del/{id}',[\App\Http\Controllers\KalaController::class,'del']);
Route::get('/', function () {
    $kalas=\App\Models\Kala::orderBy('created_at', 'desc')->get();

    return view('welcome',['kalas'=>$kalas]);});
Route::get('/stores/{id}',[\App\Http\Controllers\KalaController::class,'stores']);
Route::get('/childishs', function () {return view('childish');});
Route::get('/males', function () {return view('male');});
Route::get('/females', function () {return view('female');});


Route::get('/dashboard', function () {
    $kalas =\App\Models\Stroe::join('kalas','kalas.id','=','stroes.s_id')->get();
    dd($kalas);
    return view('dashboard',['kalas' => $kalas]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
