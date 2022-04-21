<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Manufacturer;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('product', ProductController::class);

Route::get('manu', function() {
    $manufacturer = Manufacturer::get();
    foreach($manufacturer as $manu) {

        echo $manu->product->price . '<br />';

    }
});
Route::get('/', function () {

    $product = Product::where('id', 1)->with('customers')->first();
    echo $product->name;
    echo '<br />';
    foreach($product->customers as $customer) {
        echo $customer->name . '<br />';
    } 

});


Route::get('view-products', function() {
    $products = Product::all();
    $Products = $products->toArray();
    foreach($products as $product) {
        echo $product['price'] . '<br />';
    }
});

Route::get('add/{name}', function($name) {
    $product = new Product;
    $product->name = $name;
    $product->price = 0.00;
    $product->save();

    $products = Product::select('id', 'name', 'price')
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();

    foreach($products as $product) {
        echo $product->name . ' Price: ' .  $product->price . '<br />';
    }
});

Route::get('view-json', function() {
    $products = Product::select('id','name','price','created_at')
        ->limit(5)
        ->get()->toJson();
    echo $products;
});