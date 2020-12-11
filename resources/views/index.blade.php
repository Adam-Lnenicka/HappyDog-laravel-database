@extends('layout')

@section('content')

<h1>All Dogs</h1>

<table>
     <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Breed</th>
          <th>Weight</th>
          <th>Age</th>
     </tr>


     
     @foreach($dogs as $dog)
     <tr>
          <td> <a href="{{action('DogController@show', [$dog->id])}}">Name:  {{$dog->name}}</a> </td> 
          <td> Age:  {{$dog->age}} </td> 
          <td> Breed:  {{$dog->breed}} </td> 
          <td> Weight:  {{$dog->weight}}</td>
          <td> Age  {{$dog->age}}</td>
     </tr>
     @endforeach
     

</table>
<a href="{{action('DogController@create')}}">create a dog</a>

@endsection

