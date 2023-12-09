<?php

use App\Http\Controllers\GamesController;
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

Route::prefix('games')->group(function(){
    Route::get('/', [GamesController::class, 'index'])->name('games-index');
    Route::get('/create', [GamesController::class, 'create'])->name('games-create');
    Route::POST('/', [GamesController::class, 'store'])->name('games-store');
});



//Quando a URL não estiver registrada
Route::fallback(function (){
    return "Erro";
});