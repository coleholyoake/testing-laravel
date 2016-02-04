<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

	//incharge of showing the default products page
    public function index() {

    	$products = \App\Product::all();

    	return view('products', compact('products', 'popularProducts'));

    }
}
