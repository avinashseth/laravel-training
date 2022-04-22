<?php

use Illuminate\Support\Facades\Route;

use App\Models\Product;

use Illuminate\Support\Collection;

Route::get('collection', function() {
    $names = ['Avinash','Rahul', 'Rohan'];
    collect($names)->map(function($name) {
        echo $name . '<br />';
    });
});

Route::get('number', function() {
    $numbers = collect([1,2,3]);
    Collection::macro('evenOrOdd', function () {
        return $this->map(function ($value) {
            return $value % 2 == 0 ? 'Even' : 'Odd';
        });
    });
    $evenOdd = $numbers->evenOrOdd();
    print_r($evenOdd);
});

Route::get('email', function() {
    $emails = collect(['avinash@gmail.com', 'rahul@gmail.com', 'mark@facebook.com']);
    Collection::macro('hideEmail', function () {
        return $this->map(function ($value) {
            $secondPart = explode('@', $value);
            return '****@' . $secondPart[1];
        });
    });
    $hiddenEmails = $emails->hideEmail();
    $hiddenEmails->map(function ($value) {
        echo $value . '<br />';
    });
});

Route::get('names', function() {
    Collection::macro('printNames', function ($prefix) {
        return $this->map(function ($value) use ($prefix) {
            return 'Hi, ' . $prefix . ' ' .  $value;
        });
    });
    $namesCollection = collect(['Rahul','Rohan']);
    print($namesCollection->printNames('Mr. '));
});

Route::get('search', function() {
    $collection = collect([
        ['Chapter' => 'Laravel Collection'],
        ['Chapter' => 'Introduction to Laravel 8'],
        ['Chapter' => 'Laravel Cron Jobs'],
        ['Chapter' => 'Laravel Tests'],
    ]);
    dd($collection->contains('Chapter','Laravel Collection 123'));
});

Route::get('get-product', function() {

    $products = Product::all()->reject(function($product) {

        return $product->price > 50;

    })->map(function($product) {

        return $product->name . ' Price: ' . $product->price;

    });


    foreach($products as $product) {
        echo $product . '<br />';
    }

});
