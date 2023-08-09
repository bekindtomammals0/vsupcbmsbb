<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Product
{
    public static function find($slug)
    {
        if(!file_exists($path = resource_path("/products/{$slug}.html"))){
            throw new ModelNotFoundException();
        }
        return cache()->remember("products.{$slug}", now()->addMinutes(5), fn() =>  file_get_contents($path));
    }

    public static function getAll()
    {
        // return File::files(resource_path("products/"));
        $files = File::files(resource_path("products/"));

        return array_map(fn ($file) => $file->getContents(), $files);
    }
}
