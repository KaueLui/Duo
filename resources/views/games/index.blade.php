@extends('layouts.app')

@section('title', 'Game list')


@section('content')
    <div class="container mt-5 ">
    <div class="row">
        <div class="col-sm-14">
            <h1>GAME LIST</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('games-create') }}" class="btn btn-success">New Game</a>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Company</th>
            <th scope="col">Gamemode</th>
            <th scope="col">Platform</th>
            <th scope="col">Assessment</th>
            <th scope="col">Gender</th>
            <th scope="col">Year</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
          <tr>
            <th>{{ $game->id }}</th>
            <td>{{ $game->name }}</td>
            <td>{{ $game->company }}</td>
            <td>{{ $game->gamemode }}</td>
            <td>{{ $game->platform }}</td>
            <td>{{ $game->assessment }}</td>
            <td>{{ $game->gender }}</td>
            <td>{{ $game->year }}</td>
            <td>{{ $game->price }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    
@endsection