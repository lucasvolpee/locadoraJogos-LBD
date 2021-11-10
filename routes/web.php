<?php

use App\Http\Controllers\GameController;
use App\Models\Plataform;
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

Route::get('/games', [GameController::class, 'index']);

Route::get('/games/create', function() {
    $plataforms = Plataform::all();

    return view('games_create', [
        'plataforms' => $plataforms
    ]);
});

Route::get('/games/update/{id}', function($id) {
    $game = Game::with('plataforms')->get();

    return view('games_update', [
        'game' => $games
    ]);
});

Route::post('/games/create', [GameController::class, 'create']);

Route::post('/games/delete/{id}', [GameController::class, 'delete']);
