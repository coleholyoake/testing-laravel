<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

	//incharge of showing the default products page
    public function index() {

    	$products = [
    		[
    			'name'		=> 'Apple',
    			'price'		=> '$1.00'
    		],
    		[
    			'name'		=> 'Banana',
    			'price'		=> '$1.20'
    		]
    	];

    	$popularProducts = [
    		[
    			'name'		=> 'Carrots',
    			'price'		=> '$0.99'
    		]
    	];

    	return view('products', compact('products', 'popularProducts'));

    }
}
