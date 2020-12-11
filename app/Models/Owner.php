<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dog;

class Owner extends Model
{
    use HasFactory;

    public function pets()
    {
        return $this->hasMany(Dog::class);
    }
}
