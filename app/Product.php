<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //list of things that can be assigned in mass
    protected $fillable = ['name', 'price', 'stock', 'description'];
}
