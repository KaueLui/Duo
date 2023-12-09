@extends('layouts.app')

@section('title', 'New game')


@section('content')
    
    <div class="container mt-5">
    <h1>ADD A NEW GAME</h1>
    <hr>
    <form action="{{ route('games-store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control"   name="name"    placeholder="Enter the name of the game">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Company:</label>
                <input type="text" class="form-control"   name="company" placeholder="Enter the game developer company">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Game mode:</label>
                <input type="text" class="form-control"   name="gamemode" placeholder="Tell if it is Single Player or Multiplayer">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Platform:</label>
                <input type="text" class="form-control"   name="platform" placeholder="PC, Console or Smartphone">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Assessment:</label>
                <input type="text" class="form-control"   name="assessment" placeholder="leave your review about the game">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Gender:</label>
                <input type="text" class="form-control"   name="gender" placeholder="Enter the game genre">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Year:</label>
                <input type="text" class="form-control"   name="year" placeholder="Enter the year it was created">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Price:</label>
                <input type="text" class="form-control"   name="price" placeholder="Enter the current price of the game">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="Submit" class="btn btn-primary">
            </div>
        </div>
    </div>
    </form>
    

    
@endsection