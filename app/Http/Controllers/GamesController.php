<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
       $games = Game::all();
       //dd($games);
        return view('games.index', ['games'=>$games]);
    }
    public function create()
    {
        return view('games.create');

    }
    public function store(Request $request)
    {
        Game::create($request->all());
        return redirect()->route('games-index');
    }
}
