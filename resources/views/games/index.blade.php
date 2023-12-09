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
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
          <tr>
            <td>{{ $game->id }}</td>
            <td>{{ $game->name }}</td>
            <td>{{ $game->company }}</td>
            <td>{{ $game->gamemode }}</td>
            <td>{{ $game->platform }}</td>
            <td>{{ $game->assessment }}</td>
            <td>{{ $game->gender }}</td>
            <td>{{ $game->year }}</td>
            <td>{{ $game->price }}</td>
            <td>
                <a href=" {{ route('games-edit', ['id'=>$game->id]) }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                  </svg>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    
@endsection