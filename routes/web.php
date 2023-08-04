<?php

use Illuminate\Support\Facades\Route;

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
    return view('products');
});

// Route::get('/product', function () {
//     // return $slug;
//     $product = file_get_contents(__DIR__.'/../resources/products/first-product.html');

//     return view('product',[
//         'product' => $product
//     ]);
// });

Route::get('/products/{product}', function ($slug) {
    // Find a product by its slug and pass it to a view called "product"
    $product = Product::find($slug);
    return view('product',[
        'product' => $product
    ]);

    // $path = __DIR__."/../resources/products/{$slug}.html";

    // if(!file_exists($path)){
    //     return redirect('/');
    //     // dd('File does not exist!');
    // }
    // $product = cache()->remember("products.{$slug}", now()->addMinutes(5), fn() =>  file_get_contents($path));

    // return view('product',[
    //     'product' => $product
    // ]);
}) -> where('product','[A-z_\-]+');
