<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;

class ProductsController extends Controller
{

	//incharge of showing the default products page
    public function index() {

    	$products = Product::all();

    	return view('products', compact('products', 'popularProducts'));

    }

    public function create() {

		return view('products.create');
	}

    public function store(Request $request) {

    	$this->validate($request, [

	    		'name'			=>'required|min:2|max:50',
	    		'price'			=>'required|numeric|min:.01|max:9999.99',
	    		'stock'			=>'required|integer|min:0|max:65535',
	    		'description'	=>'required|between:10,1000'
	    	]);

	    // return "yo, it's all good";

	    //create a new product
	    $newProduct = new Product( $request->all() );

	    //populate the product with form data
	    // $newProduct->name 			= $request->name;
	    // $newProduct->price 			= $request->price;
	    // $newProduct->stock 			= $request->stock;
	    // $newProduct->description 	= $request->description;

	    //save product
	    $newProduct->save();

	    return redirect('products');
	}

    public function show( $id ) {

		$product = Product::findOrFail($id);

		return view('products.show', compact('product'));

    }

    public function edit( $id ) {

		//get the info about the product
		$product = Product::findOrFail($id);

		return view('products.edit', compact('product'));

    }

    public function update( Request $request, $id ) {

		$this->validate($request, [
				'name'		=>'required|min:2|max:50'
			]);

		//find product being edited
		$product = Product::findOrFail($id);

		$product->name = $request->name;

		$product->save();

		return redirect('products/' .$id);

    }
}
