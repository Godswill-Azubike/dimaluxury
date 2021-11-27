<?php

namespace App\Http\Controllers;

use App\Models\Dimaluxury3;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('admin.products', [
            'productData' => Product::latest()->simplePaginate(20),
        ],);
        // return Product::latest()->get();
    }


    public function addProduct()
    {
        return view('admin.addproduct');
    }

    public function addProductDb(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'unite_price' => 'required',
            'potential_profit' => 'required',
            'current_stock' => 'required',
        ]);

        $product = new Product();
        // add product quesry
        $product->product_name = $request->product_name;
        $product->unite_price = $request->unite_price;
        $product->potential_profit = $request->potential_profit;
        $product->current_stock = $request->current_stock;
        $product->product_details = $request->product_details;

        // execute query
        $product->save();

        return redirect()->back()->with('success', 'New Product added succeefully');
    }

    public function enableSale($id)
    {
        $product = Product::findOrFail($id);
        $product->sales_status = true;
        $product->save();

        return redirect()->back()->with('success', "The product '$product->product_name' has been enabled succeefully and currently listed on the public website for salse");
    }

    public function disableSale($id)
    {
        $product = Product::findOrFail($id);
        $product->sales_status = false;
        $product->save();

        return redirect()->back()->with('success', "The product '$product->product_name' has been disabled succeefully and NO longer listed on the public website for salse");
    }
}
