<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
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
        'products' => Product::with('category')->get()
    ]);
});

Route::get('/products/{product:slug}', function (Product $product) {
    return view('product',[
        'product' => $product
    ]);
});

Route::get('/categories/{category:slug}',function (Category $category){
    return view('products', [
        'products' => $category->products
    ]);
});
