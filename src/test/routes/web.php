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

/* 入力画面 */
Route::get('/', [App\Http\Controllers\FormController::class, 'index'])->name('index');
/* 確認画面 postされたときだけ遷移する */
Route::post('/confirm', [App\Http\Controllers\FormController::class, 'confirm'])->name('confirm');
/* 完了画面 postされたときだけ遷移する */
Route::post('/complete', [App\Http\Controllers\FormController::class, 'complete'])->name('complete');
/* 上のどれにも一致しないアクセスが来た場合 */
Route::fallback(function () {
    return view('welcome');
});