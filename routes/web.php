<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PlataformController;
use App\Models\Plataform;
use Illuminate\Support\Facades\Route;
use App\Models\Game;

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

//Games
Route::get('/games', [GameController::class, 'index']);

Route::get('/games/create', function() {
    $plataforms = Plataform::all();

    return view('games_create', [
        'plataforms' => $plataforms
    ]);
});


Route::get('/games/update/{id}', function($id) {
    $game           = Game::find($id);
    $gamePlataforms = $game->plataforms->pluck('plataform_id')->toArray();

    $plataforms = Plataform::all();

    return view('games_update', [
        'game'           => $game,
        'gamePlataforms' => $gamePlataforms,
        'plataforms'     => $plataforms
    ]);
});

Route::post('/games/create', [GameController::class, 'create']);

Route::post('/games/update', [GameController::class, 'update']);

Route::post('/games/delete/{id}', [GameController::class, 'delete']);


//Plataforms
Route::get('/plataforms', [PlataformController::class, 'index']);

Route::get('/plataform/create', function() {
    return view('plataforms_create');
});

Route::post('/plataform/create', [PlataformController::class, 'create']);

Route::post('/plataform/delete', [PlataformController::class, 'delete']);
