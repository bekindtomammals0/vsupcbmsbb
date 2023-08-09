<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Product
{
    public static function find($slug)
    {
        if(!file_exists($path = resource_path("/products/{$slug}.html"))){
            throw new ModelNotFoundException();
        }
        return cache()->remember("products.{$slug}", now()->addMinutes(5), fn() =>  file_get_contents($path));
    }
}
