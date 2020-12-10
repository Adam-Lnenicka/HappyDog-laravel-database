<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    //
    public function index()
    {
        $dogs = Dog::get();

        return view('index', compact('dogs'));
    }

    public function show($id)
    {
        $dog = Dog::findOrFail($id);

        return view('show', compact('dog'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $dog = new Dog;
        $dog->name = $request->input('name');
        $dog->breed = $request->input('breed');
        $dog->age = $request->input('age');
        $dog->save();

        return redirect(action('DogController@index'));
    }


    public function edit($id)
    {
        $dog = Dog::findOrFail($id);

        return view('/edit',compact('dog'));

    }

    public function update($id, Request $request)
    {   
        $dog = Dog::findOrFail($id);
    
        $dog->update($request->all());

        return redirect(action('DogController@index'));
    }

    
}
