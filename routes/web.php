<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Yaml\Yaml;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/products', function () {
    return view('products', [
        'products' => Product::all()
    ]);
});

Route::get('/products/{product}', function ($id) {
    return view('product',[
        'product' => Product::findOrFail($id)
    ]);
});
