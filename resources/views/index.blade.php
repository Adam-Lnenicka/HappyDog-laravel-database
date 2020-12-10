<h1>All Dogs</h1>

@foreach($dogs as $dog)
     <p> Name:  {{$dog->name}} </p> 
     <p> Age:  {{$dog->age}} </p> 
     <p> Breed:  {{$dog->breed}} </p> 
     <p> Weight:  {{$dog->weight}}</p>
     <p> Age  {{$dog->age}}</p>
@endforeach

<a href="{{action('DogController@create')}}">create a dog</a>

<a href="{{action('DogController@edit ')}}">create a dog</a>