<?php

use Illuminate\Support\Facades\Route;
// 指定したいコントローラをuseでインポート/
use App\Http\Controllers\BlogController;

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

// ブログ一覧
Route::get('/', [BlogController::class, 'showIndex'])->name('index');
