<h2>Dog Profile:{{$dog->name}} </h2>


<p> Age:  {{$dog->age}} </p> 
<p> Breed:  {{$dog->breed}} </p> 
<p> Weight:  {{$dog->weight}}</p>
<p> Age  {{$dog->age}}</p>

<a href="{{action('DogController@index')}}">Back to all dogs</a>