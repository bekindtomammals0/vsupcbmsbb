<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
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
        'products' => Product::getAll()
    ]);
});

Route::get('/products/{product}', function ($slug) {
    return view('product',[
        'product' => Product::find($slug)
    ]);
}) -> where('product','[A-z_\-]+');
