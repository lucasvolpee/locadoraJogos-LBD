<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return view('games', [
            'games' => $games
        ]);
    }

    public function delete(Request $request)
    {
        $gameId = $request->input('game_id');
        Game::destroy($gameId);

        return redirect('/games');
    }

    public function create(Request $request)
    {
        $newGame = [
            'game_title'        => $request->input('game_title'),
            'developer'         => $request->input('developer'),
            'distributor'       => $request->input('distributor'),
            'game_release_date' => $request->input('game_release_date')
        ];

        $gamePlataforms = $request->input('plataform');

        $game = Game::create($newGame);

        $game->plataforms()->attach($gamePlataforms);

        return redirect('/games');
    }
}
