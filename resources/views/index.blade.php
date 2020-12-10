@extends('layout')

@section('content')

<h1>All Dogs</h1>

@foreach($dogs as $dog)
     <p> <a href="{{action('DogController@show', [$dog->id])}}">Name:  {{$dog->name}}</a> </p> 
     <p> Age:  {{$dog->age}} </p> 
     <p> Breed:  {{$dog->breed}} </p> 
     <p> Weight:  {{$dog->weight}}</p>
     <p> Age  {{$dog->age}}</p>
@endforeach

<a href="{{action('DogController@create')}}">create a dog</a>

@endsection

