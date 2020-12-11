<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;
use App\Models\Dog;

class DogSeeder extends Seeder
{
    
    public function run() 
    
    {

         $json_to_string = file_get_contents(storage_path('data.json'));

         $data = json_decode($json_to_string);
            
        $owner_id = 0;
        foreach ($data as $item) {
            $owner = new Owner;
            $owner->name = $item->first_name;
            $owner->surname = $item->surname;
            $owner->save();
            $owner_id = $owner->id;
            
            foreach ($item->dogs as $new_dog) {
                $dog = new Dog;
                $dog->name = $new_dog->name;
                $dog->breed = $new_dog->breed;
                $dog->weight = $new_dog->weight;
                $dog->age = $new_dog->age;
                $dog->owner_id = $owner_id;
                $dog->save();               
            }
        }
    }
}