<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id', 'name', 'price')
            ->orderBy('price', 'desc')
            ->whereIn('id', [1,2])
            ->get();

        // select * from products order by price desc;

        // return view('product.list-all', compact('products'));

        $pageTitle = "View All Products";
        $pageDescription = "List of all products sold by our company";

        return view('product.list-all', [
            'products' => $products,
            'title' =>  $pageTitle,
            'page_description'  =>  $pageDescription
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->save();
        echo 'New Product Added Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $getProduct = Product::select('id', 'name', 'price')
            ->where('id', $product->id)
            ->get();

        echo $getProduct->name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        Product::where('id', $product->id)
            ->update(['price'=>rand(10,50)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::where('id', $product->id)->delete();
    }
}
