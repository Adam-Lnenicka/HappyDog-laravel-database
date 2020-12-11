@extends('layout')

@section('content')
<main>
<h2>Dog Profile: {{$dog->name}} </h2>

    <div class="background">
        <div class="picture">
            <img class="user-photo" src="{{$dog->image_path}}" alt="dog name">
        </div>
    </div>

    <a class ="link" href="{{action('DogController@index')}}">Back to all dogs</a>


    <a class ="link"  href="{{action('DogController@edit', [$dog->id])}}">Edit</a>

    <a class ="link"  href="{{action('DogController@destroy')}}">Delete profile</a>

<div class="info">
    <p> Age: <strong> {{$dog->age}} </strong> </p>   
    <p> Breed: <strong> {{$dog->breed}} </strong></p>     
    <p> Weight: <strong> {{$dog->weight}} kg</strong></p>
    <p> Name: <strong> {{$dog->name}}</strong> </p> 
</div>




</main>

@endsection

