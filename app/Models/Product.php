<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Yaml\Yaml;

class Product
{
    public $title;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $date, $body, $slug) {
        $this->title = $title;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug)
    {
        //removed as of Episode 12
        // if(!file_exists($path = resource_path("/products/{$slug}.html"))){
        //     throw new ModelNotFoundException();
        // }
        // return cache()->remember("products.{$slug}", now()->addMinutes(5), fn() =>  file_get_contents($path));

        //of all the products, find the one with matching $slug
        return static::getAll()->firstWhere('slug', $slug);
    }

    public static function getAll()
    {
        // return File::files(resource_path("products/"));

        //removed as of Episode 12
        // $files = File::files(resource_path("products/"));

        // return array_map(fn ($file) => $file->getContents(), $files);

        return collect(File::files(resource_path("products/")))
        ->map(fn ($file) => YamlFrontMatter::parseFile($file))
        ->map(fn ($document) => new Product(
                $document->title,
                $document->date,
                $document->body(),
                $document->slug
            ));
    }
}
