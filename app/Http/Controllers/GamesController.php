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

    public function edit($id)
    {
        $games = Game::where('id',$id)->first();
        if(!empty($games)){
            return view('games.edit', ['games'=>$games]);
        }
        else
        {
            return redirect()->route('games-index');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'company' => $request->company,
            'gamemode' => $request->gamemode,
            'platform' => $request->platform,
            'assessment' => $request->assessment,
            'gender' => $request->gender,
            'year' => $request->year,
            'price' => $request->price,
        ];
        Game::where('id',$id)->update($data);
        return redirect()->route('games-index');
    }
}
