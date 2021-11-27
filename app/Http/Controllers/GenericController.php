<?php

namespace App\Http\Controllers;

use App\Models\Dimaluxury3;
use App\Models\Product;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    //

    public function indexPage()
    {
        return view('public.welcome', [
            'productData' => Product::where([['sales_status', true], ['current_stock', '>', 0]])->latest('updated_at')->simplePaginate(9),
        ]);
    }

    public function checkIn($id)
    {
        return view('public.check', ['productData' => Product::findOrFail($id)]);

        // return Product::findOrFail($id);
    }
}
