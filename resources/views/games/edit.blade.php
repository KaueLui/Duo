@extends('layouts.app')

@section('title', 'Edit the game')


@section('content')
    
    <div class="container mt-5">
    <h1>EDIT THE GAME</h1>
    <hr>
    <form action="{{ route('games-update',['id'=>$games->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control"   name="name"  value="{{ $games->name }}" placeholder="Enter the name of the game">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Company:</label>
                <input type="text" class="form-control"   name="company" value="{{ $games->company }}"  placeholder="Enter the game developer company">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Game mode:</label>
                <input type="text" class="form-control"   name="gamemode" value="{{ $games->gamemode }}" placeholder="Tell if it is Single Player or Multiplayer">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Platform:</label>
                <input type="text" class="form-control"   name="platform" value="{{ $games->platform }}" placeholder="PC, Console or Smartphone">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Assessment:</label>
                <input type="text" class="form-control"   name="assessment" value="{{ $games->assessment }}" placeholder="leave your review about the game">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Gender:</label>
                <input type="text" class="form-control"   name="gender" value="{{ $games->gender }}" placeholder="Enter the game genre">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Year:</label>
                <input type="text" class="form-control"   name="year"  value="{{ $games->year }}" placeholder="Enter the year it was created">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Price:</label>
                <input type="text" class="form-control"   name="price"  value="{{ $games->price }}" placeholder="Enter the current price of the game">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="Submit" class="btn btn-success" value="Update">
            </div>
        </div>
    </div>
    </form>
    

    
@endsection