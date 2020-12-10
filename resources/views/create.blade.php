@extends('layout')

@section('content')

<h1>Create a new member</h1>

<form action ="{{action('DogController@store')}}" method ="post">
    @csrf
    <p>
        <label for="name">Name</label>
        <input type ="text" name="name" ></input>
    <p>
    </p>
        <label for="age">Age</label>
        <input type ="text" name="age"></input>
    <p>
    </p>
        <label for="breed">Breeed</label>
        <input type ="text" name="breed"></input>
    <p>
    </p>
        <label for="weight">Weight</label>
        <input type ="text" name="weight"></input>
    <p>
    </br>
    <button type="submit">Create a new member</button>
</form>

@endsection