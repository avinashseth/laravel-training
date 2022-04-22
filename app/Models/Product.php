<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function manu() {
        return $this->hasOne(Manufacturer::class, 'product_id', 'id');
    }

    function customers() {
        return $this->hasMany(Customer::class);
    }

    function getNameAttribute($string) {
        return 'Mr. ' . $string;
    }

    function setNameAttribute($string) {
        $this->attributes['name'] = strtoupper($string);
    }

    // function getPriceAttribute($string) {
    //     return '$' . $string;
    // }
    protected $cast = [
        'created_at'    =>  'Y-m-d'
    ];
}
